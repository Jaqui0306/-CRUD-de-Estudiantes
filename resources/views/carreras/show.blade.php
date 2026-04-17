@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto">

    <h1 class="text-3xl font-bold mb-6">
        <i class="fa-solid fa-graduation-cap"></i> {{ $carrera->nombre }}
    </h1>

    <div class="bg-slate-900 p-6 rounded-xl shadow">

        <h2 class="text-lg mb-4 text-slate-300">
            Estudiantes en esta carrera
        </h2>

        @if($carrera->estudiantes->count() > 0)

            @foreach($carrera->estudiantes as $e)
            <div class="bg-slate-800 p-3 mb-2 rounded flex justify-between items-center">

                <span class="font-medium">{{ $e->nombre }}</span>

                <span class="text-slate-400 text-sm">
                    Semestre {{ $e->semestre }}
                </span>

            </div>
            @endforeach

        @else
            <p class="text-slate-400">
                No hay estudiantes registrados en esta carrera
            </p>
        @endif

    </div>

    <a href="/carreras" class="text-sky-400 mt-6 inline-block hover:underline">
        ← Volver
    </a>

</div>

@endsection