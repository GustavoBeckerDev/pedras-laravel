<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedraController;
use App\Http\Controllers\SignoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('pedras', PedraController::class); // CRUD COMPLETO COM TODOS OS MÉTODOS DA CONTROLLER

Route::get('/signos', [SignoController::class, 'index'])->name('signos');



