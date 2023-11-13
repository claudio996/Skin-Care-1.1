<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Servicios;
use App\Models\Temporal;
use App\Models\TipoServicios;
use App\Models\Zonas;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicios::all();
        $tipo_servicios = TipoServicios::all();
        $zonas = Zonas::all();
        return view('layouts.servicios.index', compact('servicios', 'zonas', 'tipo_servicios'));
    }

    public function store(Request $request)
    {
        //
        $temporal = new Temporal();
        $image = $request->file('imagen')->store('public/images');
        $url = Storage::url($image);
        $zona =  $request->input('zonas');
        $zonas = implode('+', array_values($zona));
        $temporal->nombre = $request->input('name');
        $temporal->sexo = $request->input('sexo');
        $temporal->tipo_id = $request->input('tipo');
        $temporal->zonas = $zonas;
        $temporal->cantidad_min_sesion = $request->input('cant_min');
        $temporal->cantidad_max_sesion = $request->input('cant_max');
        $temporal->precio_min_sesion = $request->input('min_price');
        $temporal->precio_max_sesion = $request->input('max_price');
        $temporal->url_imagen = $url;
        $temporal->descuento = $request->input('descuento');
        $temporal->descripcion = $request->input('descripcion');
        $temporal->save();
        return redirect()->back();
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
