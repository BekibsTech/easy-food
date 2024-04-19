<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\Tela2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/pedidos/quadro', [PedidosController::class, 'quadro'])->name('pedidos.quadro');
Route::get('/tela2', [Tela2Controller::class, 'tela2'])->name('tela2');

