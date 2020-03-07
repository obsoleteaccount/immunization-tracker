<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\child::class, function (Faker $faker) {
    return [
        'parent_id'=>$faker->randomDigitNotNull,
        'firstname'=>$faker->firstname,
        'lastname'=>$faker->lastname,
        'surname'=>$faker->lastname,
        'gender'=>'Male',
        'dob'=>$faker->dateTime,
    ];
});
