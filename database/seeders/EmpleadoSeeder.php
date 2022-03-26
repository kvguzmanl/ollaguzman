<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Empleado::insert([
        // Post::insert([
        $data = [
            [
                'codigoEmpleado' => 1,
                'nombre' => 'Juan Antonio Perez Quintanilla',
                'edad' => 34,
                'sueldoBase' => 500.00,
                'codigoArea' => 1
            ],
            [
                'codigoEmpleado' => 2,
                'nombre' => 'Maria Elizabeth Melendez Lopez',
                'edad' => 45,
                'sueldoBase' => 800.00,
                'codigoArea' => 2
            ], 
            [
                'codigoEmpleado' => 3,
                'nombre' => 'Mario Emilio Ventura Lainez',
                'edad' => 24,
                'sueldoBase' => 500.00,
                'codigoArea' => 3
            ], 
            [
                'codigoEmpleado' => 4,
                'nombre' => 'Juan Carlos de la O',
                'edad' => 56,
                'sueldoBase' => 600.00,
                'codigoArea' => 4
            ], 
            [
                'codigoEmpleado' => 5,
                'nombre' => 'Luisa Maria Aguillon Jimenez',
                'edad' => 67,
                'sueldoBase' => 500.00,
                'codigoArea' => 5
            ]
        ];

        foreach($data as $value){
            DB::table('empleado')->insert($value);
        }
    }
}
