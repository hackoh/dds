<?php

namespace Fuel\Migrations;

class Add_regist_poison_to_devils
{
	public function up()
	{
		\DBUtil::add_fields('devils', array(
			'regist_poison' => array('constraint' => 255, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('devils', array(
			'regist_poison'

		));
	}
}