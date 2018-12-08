<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    return [
        'question' => 'what is ' . $faker->name . ' jobs?',
        'opt_1' => $faker->jobTitle,
        'opt_2' => $faker->jobTitle,
        'opt_3' => $faker->jobTitle,
        'opt_4' => $faker->jobTitle,
        'answer' => $faker->randomElement(['a','b','c','d']),
    ];
});
