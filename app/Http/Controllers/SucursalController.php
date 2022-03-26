<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sucursal')->with('tipo_recurso', 'Controlador de recurso');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function data(){
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

        return view('/sucursal/index')->with('data', $data);
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        //
    }
}
