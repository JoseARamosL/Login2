<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConceptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Conceptos = ['Trabajo', 'Ocio', 'Personal', 'Viajes', 'Arreglo', 'Libre', 'Camas', 'Muebles', 'Deportes', 'Casa'];

        for($i = 0; $i <= 9; $i++) {
            DB::table('conceptos')->insert([
                'concepto' => $Conceptos[$i],
                'factura_id' => rand(1, 5),
                'unidades' => rand(1, 10),
                'precio' => rand(1, 1000),
                'importe' => rand(1, 1000)
            ]);
        }

    }
}
