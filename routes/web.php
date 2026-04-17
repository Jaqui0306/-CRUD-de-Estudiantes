<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CarreraController;

Route::get('/', [EstudianteController::class, 'index']);
Route::get('/create', [EstudianteController::class, 'create']);
Route::post('/store', [EstudianteController::class, 'store']);
Route::get('/edit/{id}', [EstudianteController::class, 'edit']);
Route::post('/update/{id}', [EstudianteController::class, 'update']);
Route::get('/delete/{id}', [EstudianteController::class, 'delete']);
Route::get('/ver/{id}', [EstudianteController::class, 'show']);
Route::get('/carreras', [CarreraController::class, 'index']);
Route::get('/carreras/create', [CarreraController::class, 'create']);
Route::post('/carreras/store', [CarreraController::class, 'store']);
Route::get('/carreras/edit/{id}', [CarreraController::class, 'edit']);
Route::post('/carreras/update/{id}', [CarreraController::class, 'update']);
Route::get('/carreras/delete/{id}', [CarreraController::class, 'delete']);
Route::get('/carreras/ver/{id}', [CarreraController::class, 'show']);