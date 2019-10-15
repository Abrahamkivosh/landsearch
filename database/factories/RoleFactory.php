<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $roles = array('administrator',"User","Agent" );
    return [
        'name'=>$faker->randomElement($roles)
    ];
});
