<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::count() ? \App\User::pluck('id')->random() : factory(\App\User::class)->create(),

        'transaction_id' => $faker->randomDigit,
        'order' => $faker->word,
        'status' => $faker->word,
        'account_name' => $faker->name,
        'bank_name' => $faker->name,
        'account_number' => $faker->numberBetween(123456789, 64567890),
        'transaction_date' => $faker->date,
        'balance' => $faker->numberBetween(0, 20000)
    ];
});
