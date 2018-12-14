<?php

use Faker\Generator as Faker;

$factory->define(App\Model\StudentExam::class, function (Faker $faker) {
    return [
        'score'=> '50'
    ];
});
