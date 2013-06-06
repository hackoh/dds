<?php

class Model_Devil_Skill extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'devil_id',
		'skill_id',
		'lv',
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
	protected static $_table_name = 'devil_skills';

	protected static $_belongs_to = array(
		'skill' => array(
			'model_to' => 'Model_Skill',
			'key_from' => 'skill_id',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false,
		),
		'devil' => array(
			'model_to' => 'Model_Devil',
			'key_from' => 'devil_id',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false,
		),
	);

}
