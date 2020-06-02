<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Livre;
use Faker\Generator as Faker;

$factory->define(Livre::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(8),
        'author'=>$faker->name,
        'year'=>$faker->year,
    ];
});
