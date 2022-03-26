<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sucursal::insert([
        // Post::insert([
        $data = [
            [
                'codigoSucursal' => 1,
                'nombre' => 'San Salvador',
                'direccion' => 'Av. Enrique Araujo, #503'
            ],
            [
                'codigoSucursal' => 2,
                'nombre' => 'San Miguel',
                'direccion' => 'Calle San Margarita, #20'
            ], 
            [
                'codigoSucursal' => 3,
                'nombre' => 'Santa Ana',
                'direccion' => 'Centro Comercial metrocentro, local 26'
            ], 
            [
                'codigoSucursal' => 4,
                'nombre' => 'Sonsonate',
                'direccion' => 'Centro el paseo, #34'
            ]
        ];
        foreach($data as $value){
            DB::table('sucursal')->insert($value);
        }
    }
}
