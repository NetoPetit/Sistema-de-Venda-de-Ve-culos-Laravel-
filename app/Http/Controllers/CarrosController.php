<?php

namespace App\Http\Controllers;

use App\Models\Carros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index(){
        $carros = Carros::all();
        //var_dump($carros);
        //compact()

        return view('carros.index', compact('carros'));
    }

    public function cadastrarCarro(){


        return view('carros.cadastrar');
    }

    public function buscarCarro($id){
        $carro = Carros::find($id);

        if(!$carro)
            echo "Carro não encontrado";

        return view('carros.alterar', compact('carro'));

    }

    public function alterarCarro(Request $request){

        //validate

        $carro = Carros::find($request->input('id'));
        $carro->update($request->all());
        /*
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');
        */
        return redirect()->route('carros.index');

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

    public function apagarCarro($id){

        $carro = Carros::find($id);

        $carro->delete();

        return redirect()->route('carros.index');
    }
}
