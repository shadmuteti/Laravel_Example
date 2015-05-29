<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('users',function($table)
		{
			$table->increments('id'); //Autoincremented primary key
			$table->string('username');
			$table->string('password');
			$table->text('bio');
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
				Schema::drop('users'); //Drop table `users`

	}

}
