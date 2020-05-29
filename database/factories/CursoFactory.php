<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cursos;
use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Cursos::class, function (Faker $faker) {
    return [
        'id_categoria'=>$faker->numberBetween(1,4),
        'titulo'=> $faker->sentence,
        'descripcion'=> $faker->paragraph,
        'nmMaxAlumnos' => $faker->numberBetween(8,12)
    ];
});
