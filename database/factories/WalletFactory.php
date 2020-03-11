<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wallet;
use Faker\Generator as Faker;

$factory->define(Wallet::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return \App\User::all()->random();
        },
        'card_no' => $faker->randomNumber(),
        'card_exp_date' =>$faker->date,
        'cvv' => $faker->numberBetween(100, 999),
        'amount' =>$faker->numberBetween(200, 99999),
        'total_amount' => $faker->numberBetween(100,99999)
    ];
});
