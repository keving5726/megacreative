<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carrera;
use Faker\Generator as Faker;

$factory->define(Carrera::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique->colorName,
        'descripcion' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'status_id' => $faker->numberBetween($min = 1, $max = 2)
    ];
});
