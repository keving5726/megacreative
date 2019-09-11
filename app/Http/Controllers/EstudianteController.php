<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Sexo;
use App\Carrera;
use App\Status;
use App\Pais;
use App\Estado;
use App\Ciudad;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos = Sexo::all();
        $carreras = Carrera::all();
        $statuses = Status::all();
        $paises = Pais::all();
        $estados = Estado::all();
        $ciudades = Ciudad::all();

        return view('estudiantes.create', compact('sexos', 'carreras', 'statuses', 'paises', 'estados', 'ciudades'));
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
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'sexo' => 'required',
            'fecha_de_nacimiento' => 'required',
            'email' => 'required|max:100',
            'carrera' => 'required',
            'status' => 'required',
            'pais' => 'required',
            'estado' => 'required',
            'ciudad' => 'required'
        ]);

        $estudiante = new Estudiante([
            'nombres' => $request->get('nombres'),
            'apellidos' => $request->get('apellidos'),
            'sexo_id' => $request->get('sexo'),
            'fecha_de_nacimiento' => $request->get('fecha_de_nacimiento'),
            'email' => $request->get('email'),
            'carrera_id' => $request->get('carrera'),
            'status_id' => $request->get('status'),
            'pais_id' => $request->get('pais'),
            'estado_id' => $request->get('estado'),
            'ciudad_id' => $request->get('ciudad')
        ]);

        $estudiante->save();

        return redirect('/estudiantes')->with('success', 'Estudiante creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        $sexos = Sexo::all();
        $carreras = Carrera::all();
        $statuses = Status::all();
        $paises = Pais::all();
        $estados = Estado::all();
        $ciudades = Ciudad::all();

        return view('estudiantes.edit', compact('estudiante', 'sexos', 'carreras', 'statuses', 'paises', 'estados', 'ciudades'));
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
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'sexo' => 'required',
            'fecha_de_nacimiento' => 'required',
            'email' => 'required|max:100',
            'carrera' => 'required',
            'status' => 'required',
            'pais' => 'required',
            'estado' => 'required',
            'ciudad' => 'required'
        ]);

        $estudiante = Estudiante::find($id);
        $estudiante->nombres = $request->get('nombres');
        $estudiante->apellidos = $request->get('apellidos');
        $estudiante->sexo_id = $request->get('sexo');
        $estudiante->fecha_de_nacimiento = $request->get('fecha_de_nacimiento');
        $estudiante->email = $request->get('email');
        $estudiante->carrera_id = $request->get('carrera');
        $estudiante->status_id = $request->get('status');
        $estudiante->pais_id = $request->get('pais');
        $estudiante->estado_id = $request->get('estado');
        $estudiante->ciudad_id = $request->get('ciudad');

        $estudiante->save();

        return redirect('/estudiantes')->with('success', 'Estudiante actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);

        $estudiante->delete();

        return redirect('/estudiantes')->with('success', 'Estudiante eliminado exitosamente!');
    }
}
