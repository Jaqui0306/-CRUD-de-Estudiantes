<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Carrera;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::with('carrera')->get();
        return view('welcome', compact('estudiantes'));
    }

    public function create()
    {
        $carreras = Carrera::all();
        return view('estudiantes.create', compact('carreras'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'carrera_id' => 'required',
            'semestre' => 'required|integer'
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'correo.required' => 'El correo es obligatorio',
            'correo.email' => 'Correo inválido',
            'carrera_id.required' => 'Selecciona una carrera',
            'semestre.required' => 'El semestre es obligatorio'
        ]);

        Estudiante::create($request->all());

        return redirect('/')->with('success', 'Estudiante creado');
    }

    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $carreras = Carrera::all();

        return view('estudiantes.edit', compact('estudiante', 'carreras'));
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'carrera_id' => 'required',
            'semestre' => 'required'
        ]);

        $estudiante->update($request->all());

        return redirect('/')->with('success', 'Actualizado');
    }

    public function delete($id)
    {
        Estudiante::findOrFail($id)->delete();
        return redirect('/')->with('success', 'Eliminado');
    }

    public function show($id)
    {
        $estudiante = Estudiante::with('carrera')->findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }
}