<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ServiciosMasculinos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function PromocionMasculina()
    {
         $promociones = DB::table('detalle_servicios')
            ->crossJoin('servicios')
            ->select('*')
            ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
            ->where('servicios.sexo', '=', '1')
            ->where('servicios.tipo_id', '=', '1')
            ->get(); 

            return view('serviciosMasculinos.promociones', compact('promociones'));

/* 

        if ($promociones->count() >= 1) {
            return view('serviciosMasculinos.promociones', compact('promociones'));
        } else {
            return view('serviciosMasculinos.promociones', compact('promociones'));

            return redirect()->back();
        } */
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
