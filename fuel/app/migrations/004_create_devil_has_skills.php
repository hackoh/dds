<?php

namespace Fuel\Migrations;

class Create_devil_has_skills
{
	public function up()
	{
		\DBUtil::create_table('devil_has_skills', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'devil_id' => array('constraint' => 11, 'type' => 'int'),
			'skill_id' => array('constraint' => 11, 'type' => 'int'),
			'lv' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('devil_has_skills');
	}
}