<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status' => 'Habilitado',
        ]);

        DB::table('statuses')->insert([
            'status' => 'Inhabilitado',
        ]);
    }
}
