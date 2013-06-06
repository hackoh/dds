<?php

namespace Fuel\Migrations;

class Add_attack_target_to_devils
{
	public function up()
	{
		\DBUtil::add_fields('devils', array(
			'attack_target' => array('constraint' => 255, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('devils', array(
			'attack_target'

		));
	}
}