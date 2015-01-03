<?php
use Faker\Factory as Faker;
use Shop\User;
class UsersTableSeeder extends Seeder {

    public function run()
    {
        $this->command->info('Seeding Users Table Seeders ...');

        $faker = Faker::create();

        foreach (range(1, 25) as $index)
        {
            User::create([
                'username'        => $faker->userName,
                'email'           => $faker->email,
                'fullname'        => $faker->firstName,
                'password'        => Hash::make('secret'),
                'phone'           => $faker->phoneNumber,
                'mobile'          => $faker->phoneNumber,
                'mobile_verified' => rand(0, 1),
                'street_address'  => $faker->streetAddress,
                'area_location'   => $faker->streetName,
                'city'            => $faker->city,
                'country'         => $faker->country
            ]);
        }
    }

}