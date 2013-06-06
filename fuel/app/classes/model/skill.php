<?php

class Model_Skill extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'type',
		'target',
		'mp',
		'description',
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
	protected static $_table_name = 'skills';

	protected static $_has_many = array(
		'devil_skills' => array(
			'key_from' => 'id',
			'model_to' => 'Model_Devil_Skill',
			'key_to' => 'skill_id',
			'cascade_save' => true,
			'cascade_delete' => true,
		),
	);

}
