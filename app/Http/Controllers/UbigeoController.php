<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Ubigeo;


class UbigeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function get_api_departamentos()
    {
        $departamento = Departamento::all();
        return $departamento;
    }

    public function get_api_provincias(Request $request)
    {
        $id_departamento = $request->hospital;
        $provincia = Provincia::where('departamento_id', '=', $id_departamento)->get();
        return $provincia;
    }


    public function get_api_distritos()
    {
        $distrito = Distrito::all();
        return $distrito;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ubigeo  $ubigeo
     * @return \Illuminate\Http\Response
     */
    public function show(Ubigeo $ubigeo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ubigeo  $ubigeo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubigeo $ubigeo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ubigeo  $ubigeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubigeo $ubigeo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ubigeo  $ubigeo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubigeo $ubigeo)
    {
        //
    }
}
