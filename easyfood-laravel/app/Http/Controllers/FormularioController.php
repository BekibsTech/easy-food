<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario(){
        return view('/telaFormulario');
    }

    public function store(Request $request){
        $request->validate([
            'nomeItem' => ['required', 'max:255'],
        ]);

        $formulario = new Formulario();
        $formulario->nomeItem = $request->nomeItem;
        $formulario->precoItem = $request->precoItem;

        $pedido->save();
        return redirect()->route('formulario.create')->with('success', 'Pedido salvo com sucesso');
    }

    public function delete($id){
        $formulario = formulario::find($id);

        $formulario->delete();

        return view('formulario.create')->with('success', 'Pedido excluído com sucesso');
    }


}

