<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create();
        $this->command->info('Preparing Users Table Seeders');
        User::truncate(); // empty the table

		foreach(range(1, 30) as $index)
		{
			User::create([
                'username' => $faker->userName,
                'first' => $faker->firstName,
                'last' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make($faker->word),
                'phone' => $faker->phoneNumber,
                'mobile' => $faker->randomNumber(10),
                'mobile_verified' => rand(0,1),
                'address1' => $faker->address,
                'address2' => $faker->streetAddress
			]);
		}
        $this->command->info('Finished seeding Users Table');
	}

}