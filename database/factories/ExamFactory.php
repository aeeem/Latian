<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Exam::class, function (Faker $faker) {
    return [
        'name'=> 'harian' . random_int(0,4),
        'Time_Limit'=> random_int(60,100),
       
        
        
    ];
});
