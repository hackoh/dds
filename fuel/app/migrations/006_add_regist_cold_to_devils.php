<?php

namespace Fuel\Migrations;

class Add_regist_cold_to_devils
{
	public function up()
	{
		\DBUtil::add_fields('devils', array(
			'regist_cold' => array('constraint' => 255, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('devils', array(
			'regist_cold'

		));
	}
}