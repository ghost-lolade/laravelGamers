<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discussion;
use Faker\Generator as Faker;

$factory->define(Discussion::class, function (Faker $faker) {
    return [
        "topic" => $faker->word,
        "details" => $faker->word,
        "option_a" => $faker->word,
        "option_b" => $faker->word,
        "option_c" => $faker->word,
        "option_d" => $faker->word,
        "status" => $faker->word,
        "answer" => $faker->randomDigit,
        "amount" => $faker->numberBetween(1,20000),
        "winner_id" => $faker->randomDigit,
        "user_id" => \App\User::count() ? \App\User::pluck('id')->random() : factory(\App\User::class)->create(),

        "refree_id" => \App\User::count() ? \App\User::pluck('id')->random() : factory(\App\User::class)->create(),
    ];
});
