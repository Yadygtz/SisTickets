<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('personal')->insert([
            'id_area' => 1,
            'nombre' => 'GABRIELA FONSECA',
            'nombre_p_mostrar' => 'GABRIELA FONSECA',
            'puesto' => 'ADMINISTRATIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('personal')->insert([
            'id_area' => 5,
            'nombre' => 'KARLA REYES PONCE',
            'nombre_p_mostrar' => 'KARLA REYES PONCE',
            'puesto' => 'ADMINISTRATIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 5,
            'nombre' => 'LUCIA SANDOVAL ZARATE',
            'nombre_p_mostrar' => 'LUCIA SANDOVAL ZARATE',
            'puesto' => 'ADMINISTRATIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



    }
}
