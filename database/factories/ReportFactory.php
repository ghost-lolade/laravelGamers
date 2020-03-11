<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        "refrence_code" => $faker->asciify('********************'),
        "user_id" => function(){
            return \App\User::all()->random();
        },
        'issues' => $faker->paragraph,
        'status' => $faker->paragraph,
        'date_resolved' => $faker->date
    ];
});
