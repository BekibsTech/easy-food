<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\Tela1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/pedidos/quadro', [PedidosController::class, 'quadro'])->name('pedidos.quadro');
Route::get('/CRUD', [CRUDController::class, 'CRUD'])->name('CRUD');
Route::get('/tela1',[Tela1Controller::class, 'tela1'])->name('tela1');

