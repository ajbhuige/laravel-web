<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use App\Course;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        "course_id" => factory(Course::class),
        "name" => $faker->words(2, true),
        "results" => $faker->numberBetween($min = 1, $max = 10)
    ];
});
