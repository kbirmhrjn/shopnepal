<?php
use Faker\Factory as Faker;
use Faker\Generator;
use Shop\Categories\Category;
use Shop\Products\Product;
use Shop\Products\Attributes\ProductAttributes;

class ProductsTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        $this->command->info('Seeding Products Seeders');
        $faker = Faker::create();
        $categories = Category::lists('id');

        foreach (range(1, 100) as $index)
        {
            $product = Product::create([
                'description' => $faker->sentence(20),
                'price'       => mt_rand(100, 50000),
                'category_id' => array_rand($categories),
                'url'         => $faker->url,
                'title'       => $faker->word,
            ]);
        }
    }
}