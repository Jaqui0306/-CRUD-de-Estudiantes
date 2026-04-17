@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

<h1 class="text-3xl font-bold">Carreras</h1>

<a href="/carreras/create" class="bg-sky-500 px-4 py-2 rounded-xl">
    <i class="fa-solid fa-plus"></i> Nueva
</a>

</div>

@foreach($carreras as $c)
<div class="bg-slate-900 p-4 mb-3 rounded-xl flex justify-between items-center shadow">

<span class="font-medium">{{ $c->nombre }}</span>

<div class="flex gap-3">

<a href="/carreras/ver/{{ $c->id }}" class="text-green-400">
    <i class="fa-solid fa-eye"></i>
</a>

<a href="/carreras/edit/{{ $c->id }}" class="text-yellow-400">
    <i class="fa-solid fa-pen"></i>
</a>

<a href="/carreras/delete/{{ $c->id }}" 
   onclick="return confirm('¿Eliminar carrera?')" 
   class="text-red-400">
    <i class="fa-solid fa-trash"></i>
</a>

</div>

</div>
@endforeach

@endsection