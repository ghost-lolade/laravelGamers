<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\InviteFriend;
use Faker\Generator as Faker;

$factory->define(InviteFriend::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return App\User::all()->random();
        },
        'invited_email' => $faker->safeEmail
    ];
});
