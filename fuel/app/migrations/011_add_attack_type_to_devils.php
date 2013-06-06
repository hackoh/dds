<?php

namespace Fuel\Migrations;

class Add_attack_type_to_devils
{
	public function up()
	{
		\DBUtil::add_fields('devils', array(
			'attack_type' => array('constraint' => 255, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('devils', array(
			'attack_type'

		));
	}
}