<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserOption;
use Faker\Generator as Faker;

$factory->define(UserOption::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return \App\User::all()->random();
        },
        'discussion_id' => \App\Discussion::count() ? \App\Discussion::pluck('id')->random() : factory(\App\Discussion::class)->create(),
            
        'selected_option' => $faker->randomElement($array = array ('a','b','c'))
    ];
});
