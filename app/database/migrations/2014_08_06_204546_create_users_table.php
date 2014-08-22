<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
		    $table->increments('id');
		    $table->string('first_name', 100)->nullable();
			$table->string('last_name', 100)->nullable();
		    $table->string('email', 200)->unique();
		    $table->string('phone', 15)->nullable();
		    $table->string('password', 100);
			$table->string('remember_token', 100)->nullable;
			$table->integer('role_id');
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
		Schema::drop('users');
	}

}
