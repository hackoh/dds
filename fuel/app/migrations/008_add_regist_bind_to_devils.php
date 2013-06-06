<?php

namespace Fuel\Migrations;

class Add_regist_bind_to_devils
{
	public function up()
	{
		\DBUtil::add_fields('devils', array(
			'regist_bind' => array('constraint' => 255, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('devils', array(
			'regist_bind'

		));
	}
}