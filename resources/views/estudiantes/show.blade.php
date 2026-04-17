@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto">

    <div class="bg-slate-900 p-8 rounded-2xl shadow">

        <h2 class="text-3xl font-bold mb-6">
            <i class="fa-solid fa-user"></i> Detalle del Estudiante
        </h2>

        <div class="space-y-4 text-lg">

            <p>
                <span class="text-slate-400">Nombre:</span> 
                {{ $estudiante->nombre }}
            </p>

            <p>
                <span class="text-slate-400">Correo:</span> 
                {{ $estudiante->correo }}
            </p>

            <p>
                <span class="text-slate-400">Carrera:</span> 
                <span class="text-sky-400">
                    {{ $estudiante->carrera->nombre }}
                </span>
            </p>

            <p>
                <span class="text-slate-400">Semestre:</span> 
                {{ $estudiante->semestre }}
            </p>

        </div>

        <a href="/" class="inline-block mt-6 text-sky-400 hover:underline">
            ← Volver
        </a>

    </div>

</div>

@endsection