<?php

class DevilCombineFailedException extends Exception {}

class Model_Devil extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'lv',
		'hp',
		'mp',
		'power',
		'technique',
		'magic',
		'speed',
		'luck',
		'regist_physical',
		'regist_gun',
		'regist_fire',
		'regist_ice',
		'regist_electric',
		'regist_impact',
		'regist_exorcism',
		'regist_curse',
		'regist_cold',
		'regist_confusion',
		'regist_bind',
		'regist_sleep',
		'regist_poison',
		'attack_type',
		'attack_count',
		'attack_target',
		'class_id',
		'is_special_combine',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_belongs_to = array(
		'class' => array(
			'model_to' => 'Model_Class',
			'key_from' => 'class_id',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false,
		),
	);

	protected static $_has_many = array(
		'devil_skills' => array(
			'key_from' => 'id',
			'model_to' => 'Model_Devil_Skill',
			'key_to' => 'devil_id',
			'cascade_save' => true,
			'cascade_delete' => true,
		),
	);

	public static function _init()
	{
		\Config::load('combine', true);
	}

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('lv', 'Lv', 'required|valid_string[numeric]');
		$val->add_field('hp', 'Hp', 'required|valid_string[numeric]');
		$val->add_field('mp', 'Mp', 'required|valid_string[numeric]');
		$val->add_field('power', 'Power', 'required|valid_string[numeric]');
		$val->add_field('technique', 'Technique', 'required|valid_string[numeric]');
		$val->add_field('magic', 'Magic', 'required|valid_string[numeric]');
		$val->add_field('speed', 'Speed', 'required|valid_string[numeric]');
		$val->add_field('luck', 'Luck', 'required|valid_string[numeric]');
		$val->add_field('regist_physical', 'Regist Physical', 'required|max_length[255]');
		$val->add_field('regist_gun', 'Regist Gun', 'required|max_length[255]');
		$val->add_field('regist_fire', 'Regist Fire', 'required|max_length[255]');
		$val->add_field('regist_ice', 'Regist Ice', 'required|max_length[255]');
		$val->add_field('regist_electric', 'Regist Electric', 'required|max_length[255]');
		$val->add_field('regist_impact', 'Regist Impact', 'required|max_length[255]');
		$val->add_field('regist_exorcism', 'Regist Exorcism', 'required|max_length[255]');
		$val->add_field('regist_curse', 'Regist Curse', 'required|max_length[255]');
		$val->add_field('class_id', 'Class Id', 'required|valid_string[numeric]');

		return $val;
	}

	public function combine(\Model_Devil $devil)
	{
		if ( ! $this->class instanceof \Model_Class || ! $devil->class instanceof \Model_Class)
		{
			throw new DevilCombineFailedException('Source class is invalid');
		}

		$new_class_name = \Config::get('combine.'.$this->class->name.'&'.$devil->class->name);

		if ($new_class_name === null)
		{
			throw new DevilCombineFailedException('New class is not found');
		}

		$new_class = \Model_Class::find_by_name($new_class_name);

		if ($new_class === null)
		{
			throw new DevilCombineFailedException('New class is not found');
		}

		// add "1" after average both lv.
		$new_devil = $new_class->search(($this->lv + $devil->lv + 1) / 2);

		$new_devil->extend($this, $devil);

		if ($new_devil === null)
		{
			throw new DevilCombineFailedException('New devil is not found');
		}

		return $new_devil;
	}

	public function extend(\Model_Devil $devil1, \Model_Devil $devil2)
	{

		$skill_ids = \Arr::pluck($this->devil_skills, 'skill_id');

		foreach ($devil1->devil_skills as $bridge)
		{
			if ( ! in_array($bridge->skill_id, $skill_ids))
			{
				$this->devil_skills[] = \Model_Devil_Skill::forge(array(
					'skill_id' => $bridge->skill_id,
					'skill' => $bridge->skill,
					'lv' => 0
				));
			}
		}

		$skill_ids = \Arr::pluck($this->devil_skills, 'skill_id');

		foreach ($devil2->devil_skills as $bridge)
		{
			if ( ! in_array($bridge->skill_id, $skill_ids))
			{
				$this->devil_skills[] = \Model_Devil_Skill::forge(array(
					'skill_id' => $bridge->skill_id,
					'skill' => $bridge->skill,
					'lv' => 0
				));
			}
		}
	}

}
