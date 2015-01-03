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
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('fullname');
			$table->string('password', 60);
            $table->integer('phone')->unsigned();
            $table->integer('mobile')->unsigned();
            $table->tinyInteger('mobile_verified')->nullable();
            $table->string('street_address')->nullable();
            $table->string('area_location')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->string('email_verification',70)->nullable();
            $table->string('mobile_verification', 70)->nullable();

            $table->nullableTimestamps();
            $table->softDeletes();
            $table->rememberToken();
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
