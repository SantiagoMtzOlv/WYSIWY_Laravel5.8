<?php

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividad = Actividad::all();
        return view('layouts.inicio', ['actividad' => $actividad]);
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
    public function crear(){
        return view('layouts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
        ]);
        $actividad = new Actividad;
        $actividad->activity_name = $request->nombre;
        $actividad->contenido = $request->contenido;
        $actividad->fecha_inicio = $request->fecha_inicio;
        $actividad->fecha_termino = $request->fecha_final;
        $actividad->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        //
    }
    public function editar(Request $request, $id){
        $actividad = Actividad::findOrFail($id);
        return view('layouts.editar', ['actividad' => $actividad]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->activity_name = $request->nombre;
        $actividad->contenido = $request->contenido;
        $actividad->fecha_inicio = $request->fecha_inicio;
        $actividad->fecha_termino = $request->fecha_final;
        $actividad->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();

        return redirect('/');
    }
}
