<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LandProfile;
use Faker\Generator as Faker;

$factory->define(LandProfile::class, function (Faker $faker) {
    $status = array('Inhibition','Caution',"Restriction" );
    return [
        'land_id'=>function(){ return App\Land::all()->random(); },
        'status'=>$faker->randomElement($status),
        'encumbrance'=>$faker->realText(120)
    ];
});
