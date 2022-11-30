<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\FacturaController;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $NFac = ['73645', '74655', '25346', '63758', '74765'];

        for($i = 0; $i <= 4; $i++) {
            DB::table('facturas')->insert([
                'numero_de_factura' => $NFac[$i],
                'user_id' => $i + 1,
                'fecha' => date("Y-m-d", mt_rand(0, 500000000))
            ]);
        }

    }
}
