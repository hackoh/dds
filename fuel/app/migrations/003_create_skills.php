<?php

namespace Fuel\Migrations;

class Create_skills
{
	public function up()
	{
		\DBUtil::create_table('skills', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'type' => array('constraint' => 255, 'type' => 'varchar'),
			'target' => array('constraint' => 255, 'type' => 'varchar'),
			'mp' => array('constraint' => 11, 'type' => 'int'),
			'description' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('skills');
	}
}