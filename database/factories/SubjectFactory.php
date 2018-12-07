<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Subject::class, function (Faker $faker) {
    return [
        'name'=> 'matkul' . random_int(0,10)
    ];
});
