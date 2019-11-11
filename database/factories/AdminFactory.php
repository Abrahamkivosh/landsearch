<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    $job = array('Clerk',"Land Registrar" );
    return [
        'name' => $faker->name,
        'nationalId' => $faker->unique()->numberBetween(1200000,8000000),
        'phone' => $faker->unique()->phoneNumber,
        'job_title' =>$faker->randomElement($job),
         'email' => $faker->unique()->email,
        // 'email' => "abrahamkivosh@gmail.com",
        'email_verified_at' => now(),
        'password' => Hash::make("12345678"),
        'remember_token' => Str::random(10),
    ];
});
