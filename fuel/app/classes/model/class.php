<?php

class Model_Class extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_has_many = array(
		'devils' => array(
			'key_from' => 'id',
			'model_to' => 'Model_Devil',
			'key_to' => 'class_id',
			'cascade_save' => false,
			'cascade_delete' => false,
		),
	);

	protected static $_table_name = 'classes';

	public function search($lv)
	{
		$devil = \Model_Devil::find('first', array(
			'where' => array(
				array('class_id', '=', $this->id),
				array('lv', '>', $lv)
			),
			'order_by' => array('lv' => 'ASC'),
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
			$devil = \Model_Devil::find('first', array(
				'where' => array(
					array('class_id', '=', $this->id),
					array('lv', '<=', $lv)
				),
				'order_by' => array('lv' => 'DESC'),
				'related' => array(
					'class' => array(),
					'devil_skills' => array(
						'related' => array(
							'skill'
						)
					)
				)
			));
		}

		return $devil;
	}

}
