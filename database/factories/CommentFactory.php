<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        
        "comment" => $faker->word,
        "user_id" => function(){
            return \App\User::all()->random();
        },
        "discussion_id" => function(){
            return \App\Discussion::all()->random();
        }
    ];
});
