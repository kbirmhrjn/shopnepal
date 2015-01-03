<?php
$factory('Shop\User', [
    'username'       => $faker->userName,
    'email'          => $faker->email,
    'fullname'       => $faker->firstName,
    'password'       => Hash::make('secret'),
    'phone'          => $faker->phoneNumber,
    'mobile'         => $faker->phoneNumber,
    'street_address' => $faker->streetAddress,
    'area_location'  => $faker->streetName,
    'city'           => $faker->city,
    'country'        => $faker->country
]);

$factory('Shop\Categories\Category', [
    'title' => $faker->word,
    'body'  => $faker->sentence
]);

$factory('Shop\Products\Product', [
    'title'       => $faker->word,
    'description' => $faker->sentence,
    'price'       => $faker->randomDigit,
    'url'         => $faker->url
]);

$factory('Shop\Products\Attributes\ProductAttributes',[
    'attribute' => $faker->word,
    'value'     => $faker->word,
    'product_id' => $faker->randomNumber
]);

