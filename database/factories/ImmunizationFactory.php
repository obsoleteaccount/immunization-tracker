<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Immunization::class, function (Faker $faker) {
    return [
        'child_id'=>$faker->randomDigitNotNull,
        'bcg_at_birth'=>$faker->dateTime,
        'opv_at_birth'=>$faker->dateTime,
        'opv_at_6_weeks'=>$faker->dateTime,
        'opv_at_10_weeks'=>$faker->dateTime,
        'opv_at_14_weeks'=>$faker->dateTime,
        'dpt_at_6_weeks'=>$faker->dateTime,
        'dpt_at_10_weeks'=>$faker->dateTime,
        'dpt_at_14_weeks'=>$faker->dateTime,
        'pcv_at_6_weeks'=>$faker->dateTime,
        'pcv_at_10_weeks'=>$faker->dateTime,
        'pcv_at_14_weeks'=>$faker->dateTime,
        'yellow_fever_at_9_months'=>$faker->dateTime,
        'measles_at_9_months'=>$faker->dateTime,
    ];
});
