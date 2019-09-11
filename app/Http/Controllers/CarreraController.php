<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Status;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();

        return view('carreras.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();

        return view('carreras.create', compact('statuses'));
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
            'nombre' => 'required|max:100',
            'descripcion' => 'required|max:180',
            'status' => 'required'
        ]);

        $carrera = new Carrera([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'status_id' => $request->get('status')
        ]);

        $carrera->save();

        return redirect('/carreras')->with('success', 'Carrera creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera = Carrera::find($id);

        return view('carreras.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrera = Carrera::find($id);
        $statuses = Status::all();

        return view('carreras.edit', compact('carrera', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required|max:180',
            'status' => 'required'
        ]);

        $carrera = Carrera::find($id);
        $carrera->nombre =  $request->get('nombre');
        $carrera->descripcion = $request->get('descripcion');
        $carrera->status_id = $request->get('status');

        $carrera->save();

        return redirect('/carreras')->with('success', 'Carrera actualizada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrera = Carrera::find($id);

        $carrera->delete();

        return redirect('/carreras')->with('success', 'Carrera eliminada exitosamente!');
    }
}
