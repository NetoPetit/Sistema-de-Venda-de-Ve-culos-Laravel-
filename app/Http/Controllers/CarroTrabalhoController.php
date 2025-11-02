<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroTrabalhoController extends Controller
{
    //
    public function cadastrarCarro(){
        return view('carrosTrabalho.cadastrar');
    }

    public function salvarCarro(Request $request){

        //VALIDATE

        $carro = new Carros();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');

        $carro->save();

        return redirect()->route('carros.index');
    }

}
