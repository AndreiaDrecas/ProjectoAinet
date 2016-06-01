<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use App/User;
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('123123123'),
        'remember_token' => str_random(10),
        'location' => $faker->state,
        'profile_url' => $faker->imageUrl(200,200),
        'presentation' => $faker->text(100),
        'admin' => $faker->boolean
    ];
});

$factory->define(App\Advertisement::class, function (Faker\Generator $faker) {
    return [
        'owner_id' => $faker->randomDigit,
        'name' => $faker->word,
        'description' => text(50),
        'price_cents' => $faker->randomFloat(2,0,100),
        'quantity' => $faker->randomDigit,
        'blocked' => $faker->boolean
    ];
});