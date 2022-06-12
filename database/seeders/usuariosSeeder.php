<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        DB::table('usuarios')->insert([
            'id' => '123',
            'nombreCompleto' => 'pepe',
        ]);
        DB::table('usuarios')->insert([
            'id' => '100',
            'nombreCompleto' => 'juan',
        ]);
        DB::table('usuarios')->insert([
            'id' => '101',
            'nombreCompleto' => 'jorge',
        ]);
        DB::table('usuarios')->insert([
            'id' => '102',
            'nombreCompleto' => 'kike',
        ]);
        DB::table('usuarios')->insert([
            'id' => '1234',
            'nombreCompleto' => 'luisa',
        ]);
        DB::table('usuarios')->insert([
            'id' => '12345',
            'nombreCompleto' => 'maria',
        ]);
    }
}

