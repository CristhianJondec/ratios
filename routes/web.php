<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/empresa/{symbol}', [EmpresaController::class, 'obtenerRatios']);