<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LandUser;
use Faker\Generator as Faker;

$factory->define(LandUser::class, function (Faker $faker) {
    return [
        'user_id'=>function(){ return App\User::all()->random() ; },
        'land_id'=>function(){ return App\User::all()->random() ; }
    ];
});
