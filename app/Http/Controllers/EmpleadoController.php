<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleado')->with('tipo_recurso', 'Controlador Api');
    }

    public function data(){
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

        return view('/empleado/index')->with('data', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
