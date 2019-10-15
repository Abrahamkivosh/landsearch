<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Land;
use Faker\Generator as Faker;

$factory->define(Land::class, function (Faker $faker) {
    return [
        'titleDeed'=>$faker->unique()->numberBetween(12300,9548222),
        'plotNumber'=>$faker->unique()->numberBetween(12300,9548222),
        'width'=>$faker->numberBetween(12300,9548222),
        'length'=>$faker->numberBetween(12300,9548222),
        'landOwner_id'=>function(){ return App\LandOwner::all()->random(); },

    ];
});
