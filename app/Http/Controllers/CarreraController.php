<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        return view('carreras.index', compact('carreras'));
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ], [
            'nombre.required' => 'El nombre es obligatorio'
        ]);

        Carrera::create($request->all());

        return redirect('/carreras')->with('success', 'Carrera creada');
    }

    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.edit', compact('carrera'));
    }

    public function update(Request $request, $id)
    {
        $carrera = Carrera::findOrFail($id);

        $request->validate([
            'nombre' => 'required'
        ]);

        $carrera->update($request->all());

        return redirect('/carreras')->with('success', 'Actualizada');
    }

    public function delete($id)
    {
        Carrera::findOrFail($id)->delete();
        return redirect('/carreras')->with('success', 'Eliminada');
    }

    public function show($id)
    {
        $carrera = Carrera::with('estudiantes')->findOrFail($id);
        return view('carreras.show', compact('carrera'));
    }
}