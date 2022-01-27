<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leader;
use Faker\Generator as Faker;

$factory->define(Leader::class, function (Faker $faker) {
    return [
        'descript' => $faker -> text(),
        'bonus' => $faker -> randomNumber(4, false),
        'salary' => $faker -> randomNumber(4, true),
    ];
});
