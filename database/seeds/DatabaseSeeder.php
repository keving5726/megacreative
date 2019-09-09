<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusesTableSeeder::class);
        $this->call(SexosTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);
        $this->call(EstudiantesTableSeeder::class);
    }
}
