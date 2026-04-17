@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto">

<h2 class="text-3xl mb-6">Editar Estudiante</h2>

<div class="bg-slate-900 p-6 rounded-xl">

<form action="/update/{{ $estudiante->id }}" method="POST">
@csrf

<input type="text" name="nombre" value="{{ $estudiante->nombre }}"
class="w-full mb-3 p-3 rounded bg-slate-800">

<input type="email" name="correo" value="{{ $estudiante->correo }}"
class="w-full mb-3 p-3 rounded bg-slate-800">

<select name="carrera_id" class="w-full mb-3 p-3 rounded bg-slate-800">
@foreach($carreras as $c)
<option value="{{ $c->id }}" {{ $c->id == $estudiante->carrera_id ? 'selected' : '' }}>
{{ $c->nombre }}
</option>
@endforeach
</select>

<input type="number" name="semestre" value="{{ $estudiante->semestre }}"
class="w-full mb-3 p-3 rounded bg-slate-800">

<button class="bg-yellow-500 px-4 py-2 rounded">Actualizar</button>

</form>

</div>

</div>

@endsection