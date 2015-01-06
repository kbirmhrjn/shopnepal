<?php
use Faker\Factory as Faker;
use Faker\Generator;
use Shop\Categories\Category;
use Shop\Images\Image;
use Shop\Products\Product;

class ProductsTableSeeder extends Seeder {

    /**
     * Run the Dummy Product Seeder
     */
    public function run()
    {
        $this->command->info('Seeding Products Seeders ..');
        $faker = Faker::create();
        $categories = Category::lists('id');

        foreach (range(1, 100) as $index)
        {
            $product = Product::create([
                'description' => $faker->sentence(20),
                'price'       => mt_rand(100, 5000),
                'category_id' => array_rand($categories),
                'url'         => $faker->url,
                'title'       => $faker->word,
            ]);
            $this->addFakeImages($faker, $product); // add images to products
        }
    }

    private function addFakeImages(Generator $faker, Product $product)
    {
        $imagesTypes = [
            'cover' => 'http://placehold.it/500x250',
            'gallery' => 'http://placehold.it/768x500',
            'profile' => 'http://placehold.it/300x150',
            'thumbnail' => 'http://placehold.it/50x50',
        ];

        foreach($imagesTypes as $type => $url)
        {
            $imageAttributes = [
              'name' => $faker->company,
              'type' => $type,
               'url' => $url
            ];
            $image = Image::create($imageAttributes);
            $product->images()->save($image);
        }
    }
}