<?php

namespace Fuel\Migrations;

class Add_attack_count_to_devils
{
	public function up()
	{
		\DBUtil::add_fields('devils', array(
			'attack_count' => array('constraint' => 255, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('devils', array(
			'attack_count'

		));
	}
}