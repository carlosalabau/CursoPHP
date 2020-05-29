<?php

use Illuminate\Database\Seeder;
use App\Cursos;
use App\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         Cursos::truncate(); //Borra todos los datos de la tabla
        Categoria::truncate();

        $numCursos = 24;

        factory(Categoria::class,4)->create();
        factory(Cursos::class,$numCursos)->create(); //Creo 24 nuevos cursos

    }
}
