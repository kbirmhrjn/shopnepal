<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ImageTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $imageUrl = [
            'http://placehold.it/350x150',
            'http://placehold.it/200x150',
            'http://placehold.it/150x100',
            'http://placehold.it/50x50',
            'http://placehold.it/60x120',
        ];
        $type = ['thumbnail','profile','gallery','normal','none'];
		foreach(range(1, 100) as $index)
		{
			$image = Image::create([
                'type' => array_rand($type),
                'url' => array_rand($imageUrl),
                'name' => $faker->company
			]);
		}
	}

}
