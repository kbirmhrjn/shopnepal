<?php
use Faker\Generator;
use Shop\Categories\Category;
use Faker\Factory as Faker;
use Shop\Question;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
        $this->command->info('Seeding Category Seeders ...');
        $faker = Faker::create();
        foreach (range(1, 25) as $index)
        {
            $category = Category::create([
                'title' => $faker->word,
                'body'  => $faker->paragraph(5),
            ]);
            $this->makeQuestion($faker, $category);
        }
	}

    /**
     * Make question According to its category
     * @param Generator $faker
     * @param Category $category
     */
    private function makeQuestion( Generator $faker,Category $category)
    {
        $type = ['user', 'select'];
        foreach(range(1, 10) as $index)
        {
            $typeOf = array_rand($type);
            $question = [
                'title' => str_replace('.',' ?', $faker->sentence),
                'type' => $type[$typeOf],
                'options' => $type[$typeOf] == 'select'
                    ? json_encode(['option1','option2','option3'])
                    : null,
            ];
            $question = Question::create($question);
            $category->questions()->save($question);
        }
    }


}