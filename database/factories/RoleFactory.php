<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $roles = array('Clerk',"User","Land Registrar" );
    return [
        'name'=>$faker->randomElement($roles)
    ];
});
