<?php

namespace App\Http\Controllers;

class InicioController
{
    public function index(){
        return view('pedidos/quadro');
    }
}
