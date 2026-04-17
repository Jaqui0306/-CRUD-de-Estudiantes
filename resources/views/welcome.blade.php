@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>
        <h1 class="text-4xl font-bold">Estudiantes</h1>
        <p class="text-slate-400">Gestión del sistema</p>
    </div>

    <a href="/create" class="bg-sky-500 hover:bg-sky-600 px-5 py-3 rounded-xl shadow">
        <i class="fa-solid fa-user-plus"></i> Nuevo
    </a>

</div>

<div class="bg-slate-900 rounded-xl shadow overflow-hidden">

<table class="w-full text-sm">

<thead class="bg-slate-800 text-slate-300">
<tr>
<th class="p-4 text-left">Nombre</th>
<th>Correo</th>
<th>Carrera</th>
<th>Semestre</th>
<th class="text-center">Acciones</th>
</tr>
</thead>

<tbody>

@foreach($estudiantes as $e)
<tr class="border-t border-slate-800 hover:bg-slate-800/40">

<td class="p-4">{{ $e->nombre }}</td>
<td>{{ $e->correo }}</td>

<td>
<span class="bg-sky-500/20 text-sky-400 px-2 py-1 rounded text-xs">
{{ $e->carrera->nombre }}
</span>
</td>

<td>{{ $e->semestre }}</td>

<td>
<div class="flex justify-center gap-3">

<a href="/ver/{{ $e->id }}" class="text-green-400">
    <i class="fa-solid fa-eye"></i>
</a>

<a href="/edit/{{ $e->id }}" class="text-yellow-400">
    <i class="fa-solid fa-pen"></i>
</a>

<a href="/delete/{{ $e->id }}" 
   onclick="return confirm('¿Eliminar estudiante?')" 
   class="text-red-400">
    <i class="fa-solid fa-trash"></i>
</a>

</div>
</td>

</tr>
@endforeach

</tbody>

</table>

</div>

@endsection