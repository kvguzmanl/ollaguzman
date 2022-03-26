<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Area::insert([
        // Post::insert([
            $data=[
                [
                    'codigoArea' => 1,
                    'nombre' => 'Ventas',
                    'telefono' => '2233-3232',
                    'codigoSucursal' => 1
                ],
                [
                    'codigoArea' => 2,
                    'nombre' => 'Contabilidad',
                    'telefono' => '2433-3223',
                    'codigoSucursal' => 1
                ], 
                [
                    'codigoArea' => 3,
                    'nombre' => 'Ventas',
                    'telefono' => '2544-2333',
                    'codigoSucursal' => 2
                ], 
                [
                    'codigoArea' => 4,
                    'nombre' => 'Caja',
                    'telefono' => '2333-3333',
                    'codigoSucursal' => 3
                ], 
                [
                    'codigoArea' => 5,
                    'nombre' => 'Ventas',
                    'telefono' => '2345-4444',
                    'codigoSucursal' => 4
                ]
            ];
            foreach($data as $value){
                DB::table('area')->insert($value);
            }
    }
}
