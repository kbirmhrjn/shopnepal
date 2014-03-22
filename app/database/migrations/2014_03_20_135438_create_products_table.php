<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {

			$table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->float('price')->unsigned();
            $table->boolean('negotiation')->default(0);
            $table->string('used_for');
            $table->string('market_price');
            $table->string('url');
            $table->boolean('delievery')->default(0);
            $table->string('delievery_area')->nullable();
            $table->string('warranty_type')->nullable();
            $table->string('warranty_period')->nullable();
            $table->string('warranty_include')->nullable();

            $table->integer('productable_id');
            $table->string('productable_type');
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
		Schema::drop('products');
	}

}
