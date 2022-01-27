<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstName(),
        'lastname' => $faker -> lastName(),
        'role' => $faker -> word(),
        'salary' => $faker -> randomNumber(2000, 5000),
        'date_of_employment' => $faker -> date(),
    ];
});
