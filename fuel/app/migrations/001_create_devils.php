<?php

namespace Fuel\Migrations;

class Create_devils
{
	public function up()
	{
		\DBUtil::create_table('devils', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'lv' => array('constraint' => 11, 'type' => 'int'),
			'hp' => array('constraint' => 11, 'type' => 'int'),
			'mp' => array('constraint' => 11, 'type' => 'int'),
			'power' => array('constraint' => 11, 'type' => 'int'),
			'technique' => array('constraint' => 11, 'type' => 'int'),
			'magic' => array('constraint' => 11, 'type' => 'int'),
			'speed' => array('constraint' => 11, 'type' => 'int'),
			'luck' => array('constraint' => 11, 'type' => 'int'),
			'regist_physical' => array('constraint' => 255, 'type' => 'varchar'),
			'regist_gun' => array('constraint' => 255, 'type' => 'varchar'),
			'regist_fire' => array('constraint' => 255, 'type' => 'varchar'),
			'regist_ice' => array('constraint' => 255, 'type' => 'varchar'),
			'regist_electric' => array('constraint' => 255, 'type' => 'varchar'),
			'regist_impact' => array('constraint' => 255, 'type' => 'varchar'),
			'regist_exorcism' => array('constraint' => 255, 'type' => 'varchar'),
			'regist_curse' => array('constraint' => 255, 'type' => 'varchar'),
			'class_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('devils');
	}
}