@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto">

<h2 class="text-3xl mb-6">Nuevo Estudiante</h2>

<div class="bg-slate-900 p-6 rounded-xl">

<form action="/store" method="POST">
@csrf

<input type="text" name="nombre" placeholder="Nombre"
class="w-full mb-3 p-3 rounded bg-slate-800">

<input type="email" name="correo" placeholder="Correo"
class="w-full mb-3 p-3 rounded bg-slate-800">

<select name="carrera_id" class="w-full mb-3 p-3 rounded bg-slate-800">
@foreach($carreras as $c)
<option value="{{ $c->id }}">{{ $c->nombre }}</option>
@endforeach
</select>

<input type="number" name="semestre" placeholder="Semestre"
class="w-full mb-3 p-3 rounded bg-slate-800">

<button class="bg-green-500 px-4 py-2 rounded">Guardar</button>

</form>

</div>

</div>

@endsection