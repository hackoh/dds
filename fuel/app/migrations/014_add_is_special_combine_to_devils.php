<?php

namespace Fuel\Migrations;

class Add_is_special_combine_to_devils
{
	public function up()
	{
		\DBUtil::add_fields('devils', array(
			'is_special_combine' => array('type' => 'boolean'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('devils', array(
			'is_special_combine'

		));
	}
}