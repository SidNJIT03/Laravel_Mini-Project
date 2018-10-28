<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['Ford','Honda','Toyota']),
        'model' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'year' => $faker->year($max = 'now'),
    ];
});
