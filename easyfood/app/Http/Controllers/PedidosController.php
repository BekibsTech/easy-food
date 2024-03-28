<?php

namespace App\Http\Controllers;

abstract class PedidosController
{
    public function quadro (){
        return view('pedidos.quadro');
    }
}