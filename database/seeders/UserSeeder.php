<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = ['Raúl', 'María', 'Rosa', 'Juan', 'Manuel'];
        $Nifs = ['85746356R', '88279463E', '37568912P', '84657284T', '74663415Q'];
        $Domicilios = ['Contubernio', 'Paz', 'Lorca', 'Libertad', 'Columela'];
        $Poblaciones = ['Madrid', 'Barcelona', 'Jaén', 'Sevilla', 'Badajoz'];
        $CPostal = ['11100', '11011', '13964', '74856', '24536'];
        $Provincias = ['Cádiz', 'Murcia', 'Madrid', 'Cáceres', 'León'];

        for($i = 0; $i <= 4; $i++) {
            DB::table('users')->insert([
                'nombre' => $nombres[$i],
                'NIF' => $Nifs[$i],
                'domicilio' => 'Calle ' . $Domicilios[$i],
                'poblacion' => $Poblaciones[$i],
                'codigo_postal' => $CPostal[$i],
                'provincia' => $Provincias[$i],
                'pais' => 'España',
                'fecha_de_alta' => date("Y-m-d", mt_rand(0, 500000000))
            ]);
        }
    }
}
