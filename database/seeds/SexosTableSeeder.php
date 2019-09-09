<?php

use Illuminate\Database\Seeder;

class SexosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexos')->insert([
            'tipo' => 'Masculino',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sexos')->insert([
            'tipo' => 'Femenino',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
