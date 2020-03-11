<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DiscussionGroup;
use Faker\Generator as Faker;

$factory->define(DiscussionGroup::class, function (Faker $faker) {
    return [
        "status" => $faker->word,
        "payment_status" => $faker->word,
        "user_id" => function(){
            return \App\User::all()->random();
        },
        "discussion_id" => function(){
            return \App\Discussion::all()->random();
        }
    ];
});
