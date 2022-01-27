<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'priority' => $faker -> randomDigit(),
        'description' => $faker -> text(),
        'team' => $faker -> randomDigit(),
        'start_task' => $faker -> date(),
        'end_task' => $faker -> date(),
    ];
});
