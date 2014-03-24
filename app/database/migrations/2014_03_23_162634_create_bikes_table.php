<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bikes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type');
			$table->integer('engine');
			$table->integer('lot');
			$table->integer('make_year');
			$table->integer('mileage');
			$table->integer('kilometers');
			$table->string('features');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bikes');
	}

}
