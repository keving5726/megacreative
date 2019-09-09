<?php

use Illuminate\Database\Seeder;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Estudiante::class, 100)->create()->each(function ($estudiante) {
            $estudiante->direccion()->save(factory(App\Direccion::class)->make());
        });
    }
}
