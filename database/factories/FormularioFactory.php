<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'cliente' => $faker->name,
        'valor' => $faker->randomFloat(2,0,10),
        'motivo' => $faker->name,
    ];
});
