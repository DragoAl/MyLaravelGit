<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker -> word() ,
        'deadline' => $faker -> date() ,
        'description' => $faker -> text() 
    ];
});
