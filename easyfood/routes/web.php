<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/pedidos/quadro', [PedidosController::class, 'quadro'])->name('pedidos.quadro');

