<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title');
            $table->string('type')->nullable(); // select, radio, multiple, user
            $table->string('options')->nullable();
            $table->string('rules')->nullable();
            $table->integer('category_id')->unsigned();

            $table->nullableTimestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questions');
	}

}
