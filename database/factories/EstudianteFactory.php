<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estudiante;
use Faker\Generator as Faker;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
        'nombres' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'sexo_id' => $faker->numberBetween($min = 1, $max = 2),
        'fecha_de_nacimiento' => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years')->format('Y-m-d'),
        'email' => $faker->unique()->safeEmail,
        'carrera_id' => $faker->numberBetween($min = 1, $max = 10),
        'status_id' => $faker->numberBetween($min = 1, $max = 2)
    ];
});
