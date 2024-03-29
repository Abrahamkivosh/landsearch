<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText(50),
        'description'=>$faker->realText(50),
        'user_id'=>function(){ return App\User::all()->random(); },
    ];
});
