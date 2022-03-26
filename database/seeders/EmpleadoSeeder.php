<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        Empleado::create([
            'codigoEmpleado' => 1,
            'nombre' => 'Juan Antonio Perez Quintanilla',
            'edad' => '2233-3232',
            'sueldoBase' => 500.00,
            'codigoArea' => 1
        ],
        [
            'codigoEmpleado' => 2,
            'nombre' => 'Maria Elizabeth Melendez Lopez',
            'edad' => '2433-3223',
            'sueldoBase' => 800.00,
            'codigoArea' => 2
        ], 
        [
            'codigoEmpleado' => 3,
            'nombre' => 'Mario Emilio Ventura Lainez',
            'edad' => '2544-2333',
            'sueldoBase' => 500.00,
            'codigoArea' => 3
        ], 
        [
            'codigoEmpleado' => 4,
            'nombre' => 'Juan Carlos de la O',
            'edad' => '2333-3333',
            'sueldoBase' => 600.00,
            'codigoArea' => 4
        ], 
        [
            'codigoEmpleado' => 5,
            'nombre' => 'Luisa Maria Aguillon Jimenez',
            'edad' => '2345-4444',
            'sueldoBase' => 500.00,
            'codigoArea' => 5
        ]);
    }
}
