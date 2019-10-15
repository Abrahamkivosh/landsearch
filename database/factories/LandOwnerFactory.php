<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LandOwner;
use Faker\Generator as Faker;

$factory->define(LandOwner::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName(),
        'lname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'nationalId' =>$faker->unique()->numberBetween(1000021,5000000),
        'email' => $faker->unique()->email,
    ];
});
