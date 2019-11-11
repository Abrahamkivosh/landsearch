<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LandProfile;
use Faker\Generator as Faker;

$factory->define(LandProfile::class, function (Faker $faker) {
    $status = array('Inhibition','Caution',"Restriction","Absolute" );
    $enc = array("Lease","Charge","Hold");
    $nature = array('Lease',"Absolute" );
    return [
        'land_id'=>function(){ return App\Land::all()->random(); },
        'nature'=>$faker->randomElement($nature ),
        'status'=>$faker->randomElement($status ),
        'encumbrance'=>$faker->randomElement($enc ),
    ];
});
