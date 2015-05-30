<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DummyUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			DB::table('users')->insert(
			array(
			'username'=>'jackson',
			'bio'=>'Jack likes playing footbal',
			'password' => Hash::make('rum'), //By default, uses bcrypt algo
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
			)
			);
	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('username','=','jacksparrow')->delete(); //Deletes the user from the database.
	}

}
