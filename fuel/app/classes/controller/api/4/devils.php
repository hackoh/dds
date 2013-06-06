<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET');

class Controller_Api_4_Devils extends Controller_Rest
{

	protected $rest_format = 'json';

	/**
	 * @var  array  List all supported methods
	 */
	protected $_supported_formats = array(
		'xml' => 'application/xml',
		//'rawxml' => 'application/xml',
		'json' => 'application/json',
		'jsonp'=> 'text/javascript',
		//'serialized' => 'application/vnd.php.serialized',
		//'html' => 'text/html',
		//'csv' => 'application/csv',
	);

	public function get_index()
	{
		try
		{
			$options = array(
				'order_by' => $this->order_by(array('lv' => 'asc')),
				'related' => array(
					'devil_skills' => array(
						'related' => array('skill')
					),
					'class',
				),
			);

			if ($where = $this->where())
			{
				$options['where'] = $where;
			}

			$devils = \Model_Devil::find('all', $options);

			if ($limit = (int) \Input::get('limit', 100))
			{
				$offset = (int) \Input::get('offset', 0);
				$devils = array_splice($devils, $offset, $limit);
			}

			$this->response($devils);
		}
		catch (Exception $e)
		{
			$this->response(array(), 500);
		}
	}

	public function get_detail()
	{
		try
		{
			$names = func_get_args();

			$devil = null;

			foreach ($names as $name)
			{
				if ($devil)
				{
					$sub = \Model_Devil::find_by_name($name);

					if ( ! $sub)
					{
						throw new HttpNotFoundException('The devil "'.$name.'" is not found');
					}
					$devil = $devil->combine($sub);
				}
				else
				{
					$devil = \Model_Devil::find_by_name($name, array(
						'related' => array(
							'class' => array(),
							'devil_skills' => array(
								'related' => array(
									'skill'
								)
							)
						)
					));

					if ( ! $devil)
					{
						throw new HttpNotFoundException('The devil "'.$name.'" is not found');
					}
				}
			}

			$this->response($devil);
		}
		catch (HttpNotFoundException $e)
		{
			$this->response(array(
				'message' => $e->getMessage()
			), 404);
		}
		catch (DevilCombineFailedException $e)
		{
			$this->response(array(
				'message' => $e->getMessage()
			), 501);
		}
		catch (Exception $e)
		{
			$this->response(array(
				'message' => $e->getMessage()
			), 500);
		}


	}

	protected function order_by($default)
	{
		if (\Arr::is_assoc($default) && count($default) == 1)
		{
			foreach ($default as $default_sort_by => $default_order) {}
		}
		else
		{
			throw new InvalidArgumentException();
		}

		$sort_by = \Input::get('sort_by', $default_sort_by);
		$order = \Input::get('order', $default_order);

		if ($order != 'desc' && $order != 'asc')
		{
			$order = $default_sort_by;
		}

		$properties = \Model_Devil::properties();
		$properties = array_keys($properties);

		if (in_array($sort_by, $properties))
		{
			return array($sort_by => $order);
		}
		else
		{
			return array($default_sort_by => $order);
		}
	}

	protected function where()
	{
		$properties = \Model_Devil::properties();
		$properties = array_keys($properties);

		$where = array();

		$class_name = \Input::get('class');
		$class_id = array();

		if (is_array($class_name))
		{
			foreach ($class_name as $_class_name)
			{
				if ($_class_name)
				{
					$class = \Model_Class::find_by_name($_class_name);

					if ($class)
					{
						$class_id[] = $class->id;
					}
				}
			}
		}
		elseif ($class_name)
		{
			$class = \Model_Class::find_by_name($class_name);
			if ($class)
			{
				$class_id[] = $class->id;
			}
		}

		if ($class_id)
		{
			$where[] = array('class_id', 'in', $class_id);
		}


		if ($skill = \Input::get('skill'))
		{
			$skills = array();
			if ( ! is_array($skill))
			{
				$skills = array($skill);
			}
			elseif ($skill)
			{
				$skills = $skill;
			}
			$where[] = array('devil_skills.skill.name', 'in', $skills);
		}

		foreach (\Input::get() as $key => $value)
		{
			if (strpos($key, '<') === (strlen($key) - 1))
			{
				$key = rtrim($key, '<');
				$sign = '<=';
			}
			elseif (strpos($key, '>') === (strlen($key) - 1))
			{
				$key = rtrim($key, '>');
				$sign = '>=';
			}
			elseif (strpos($key, '!') === (strlen($key) - 1))
			{
				$key = rtrim($key, '!');
				$sign = '!=';
			}
			else
			{
				$sign = '=';
			}

			if (in_array($key, $properties))
			{

				$where[] = array($key, $sign, $value);

			}
		}

		return $where;
	}
}