<?php

namespace App\Http\Controllers;

use App\Models\formulario;
use App\Models\Formulario as ModelsFormulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function option(){
      
    }

    public function formulario(){
        $formularios = Formulario::all();

        return view('/telaFormulario',  compact('formularios'));
    }

    public function store(Request $request){
        $request->validate([
            'nomeItem' => ['required', 'max:255'],
        ]);

        $formulario = new Formulario();
        $formulario->nomeItem = $request->nomeItem;
        $formulario->precoItem = $request->precoItem;

        $formulario->save();
        return redirect()->route('formulario.create')->with('success', 'Pedido salvo com sucesso');
    }

    public function delete($id){
        $formulario = formulario::find($id);

        $formulario->delete();

        return view('formulario.create')->with('success', 'Pedido excluído com sucesso');
    }


}

