<?php

use App\Http\Controllers\BusquedaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/buscar');
Route::get('/buscar', [BusquedaController::class, 'index'])->name('buscar.index');
