<?php
use Shop\Categories\Category;
use Faker\Factory as Faker;
class CategoryTableSeeder extends Seeder {

	public function run()
	{
        $this->command->info('Seeding Category Seeders ...');
        $faker = Faker::create();
        foreach (range(1, 25) as $index)
        {
            Category::create([
                'title' => $faker->word,
                'body'  => $faker->paragraph(5),
            ]);
        }
	}

}