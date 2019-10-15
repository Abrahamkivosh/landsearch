<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoleUser;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        'user_id'=>function(){ return App\User::all()->random(); },
        'role_id'=>function(){ return App\Role::all()->random(); },
    ];
});
