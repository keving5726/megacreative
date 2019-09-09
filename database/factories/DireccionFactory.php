<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Direccion;
use Faker\Generator as Faker;

$factory->define(Direccion::class, function (Faker $faker) {
    return [
        'pais' => $faker->country,
        'estado' => $faker->state,
        'ciudad' => $faker->city
    ];
});
