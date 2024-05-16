<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario(){
        return view('/telaFormulario');
    }

    public function quadro(){
        return view('/telaFormulario/quadro');
    }

    public function store(Request $request){
        $request->validate([
            'pedido' => ['required', 'max:255'],
        ]);

        $pedido = new pedidos();
        $pedido->pedido = $request->pedido;
        $pedido->item = $request->item;
        $pedido->cliente = $request->cliente;
        $pedido->valor = $request->valor;

        $pedido->save();
        return redirect()->route('formulario.create')->with('success', 'Pedido salvo com sucesso');
    }

    public function delete($id){
        $formulario = formulario::find($id);

        $formulario->delete();

        return view('formulario.create')->with('success', 'Pedido excluído com sucesso');
    }


}

