<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return \App\User::all()->random();
        },
        'friend_id' => $faker->randomNumber()
    ];
});
