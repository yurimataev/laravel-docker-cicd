<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'task' => substr($faker->sentence(2), 0, -1),
        'due_date' => $faker->dateTimeBetween('now', '+1 month'),
    ];
});
