<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cuestionario', [CursoController::class, 'create']);
Route::get('/formulario', [CursoController::class, 'create'])->name('formulario');
Route::post('/cuestionario', [CursoController::class, 'store'])->name('formulario.store');