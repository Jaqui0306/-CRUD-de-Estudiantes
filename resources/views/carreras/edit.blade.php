@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto">

<h2 class="text-3xl mb-6">Editar Carrera</h2>

<div class="bg-slate-900 p-6 rounded-xl">

<form action="/carreras/update/{{ $carrera->id }}" method="GET">

<input type="text" name="nombre" value="{{ $carrera->nombre }}"
class="w-full mb-3 p-3 rounded bg-slate-800">

<button class="bg-yellow-500 px-4 py-2 rounded">Actualizar</button>

</form>

</div>

</div>

@endsection