<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [CursoController::class, 'create']);
Route::get('/formulario/create', [CursoController::class, 'index'])->name('formulario.index');
Route::post('/formulario/store', [CursoController::class, 'store'])->name('formulario.store');
