<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        Product::truncate();
		foreach(range(1, 20) as $index)
		{

			Product::create([
                'title' => $faker->word,
                'description' => $faker->paragraph(5),
                'price' => $faker->randomFloat(5, 40),
                'negotiation' => rand(0,1),
                'used_for' => $faker->randomNumber(1). 'years',
                'market_price' => $faker->randomNumber(10, 50),
                'url' => $faker->url,
                'delievery' => false,
                'delievery_area' => null,
                'warranty_type' => 'none',
                'warranty_include' => 'none',
                'warranty_period' => 'none',
                'category_id' => null
			]);
		}
	}

}