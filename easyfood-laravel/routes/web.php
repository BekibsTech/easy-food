<?php

use App\Http\Controllers\CRUD2Controller;
use App\Http\Controllers\CRUD3Controller;
use App\Http\Controllers\CRUD4Controller;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\Tela1Controller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;



Route::get('/', [CRUDController::class, 'CRUD'])->name('CRUD');
Route::get('/pedidos',[Tela1Controller::class, 'tela1'])->name('tela1');
Route::get('/CRUD2', [CRUD2Controller::class, 'CRUD2'])->name('CRUD2');
Route::get('/CRUD3', [CRUD3Controller::class, 'CRUD3'])->name('CRUD3');
Route::get('/CRUD4', [CRUD4Controller::class, 'CRUD4'])->name('CRUD4');
Route::get('/adicionar',[FormularioController::class, 'Formulario'])->name('formulario');



Route::post('/adicionar/create', [FormularioController::class, 'store']);

