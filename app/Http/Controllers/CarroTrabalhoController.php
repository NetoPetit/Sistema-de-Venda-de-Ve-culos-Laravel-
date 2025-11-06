<?php

namespace App\Http\Controllers;

use App\Models\CarrosTrabalho;
use Illuminate\Http\Request;

class CarroTrabalhoController extends Controller
{
    //

    public function index(){
        $carros = CarrosTrabalho::all();

        return view('carrosTrabalho.index', compact('carros'));
    }

    public function verAnuncio($id){
        $carro = CarrosTrabalho::find($id);
        echo "cheguei no ver anuncio";
        if(!$carro)
            abort(404, 'Carro não encontrado');

        return view('carrosTrabalho.verAnuncio', compact('carro'));
    }

    public function dashboard(){
        $carros = CarrosTrabalho::all();

        return view('carrosTrabalho.dashboard', compact('carros'));
    }

    public function cadastrarCarro(){
        return view('carrosTrabalho.cadastrar');
    }

    public function salvarCarro(Request $request){

        $request->validate(
            [
                'marca' => 'required',
                'modelo' => 'required',
                'cor' => 'required',
                'ano_fabricacao' => 'required',
                'quilometragem' => 'required',
                'valor' => 'required',
                'detalhes' => 'required'
            ],
            [
                'marca.required' => "O campo marca é obrigatório",
                'modelo.required' => "O campo modelo é obrigatório",
                'cor.required' => "O campo cor é obrigatório",
                'ano_fabricacao.required' => "O campo ano de fabricacao é obrigatório",
                'quilometragem.required' => "O campo quilometragem é obrigatório",
                'valor.required' => "O campo valor é obrigatório",
                'detalhes.required' => "O campo detalhes é obrigatório",
            ]
            );

        $carro = new CarrosTrabalho();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');
        $carro->quilometragem = $request->input('quilometragem');
        $carro->valor = $request->input('valor');
        $carro->detalhes = $request->input(('detalhes'));
        $carro->img1 = $request->input('img1');
        $carro->img2 = $request->input('img2');
        $carro->img3 = $request->input('img3');

        $carro->save();

        return redirect()->route('dashboard')->with('carroCadastrado', 'Carro cadastrado com sucesso!');
    }

    public function buscarCarro($id){
        $carro = CarrosTrabalho::find($id);

        if(!$carro)
            abort(404, 'Carro não encontrado');

        return view('carrosTrabalho.alterar', compact('carro'));

    }

    public function editarCarro(Request $request){

        $request->validate(
            [
                'marca' => 'required',
                'modelo' => 'required',
                'cor' => 'required',
                'ano_fabricacao' => 'required',
                'quilometragem' => 'required',
                'valor' => 'required',
                'detalhes' => 'required'
            ],
            [
                'marca.required' => "O campo marca é obrigatório",
                'modelo.required' => "O campo modelo é obrigatório",
                'cor.required' => "O campo cor é obrigatório",
                'ano_fabricacao.required' => "O campo ano de fabricacao é obrigatório",
                'quilometragem.required' => "O campo quilometragem é obrigatório",
                'valor.required' => "O campo valor é obrigatório",
                'detalhes.required' => "O campo detalhes é obrigatório",
            ]
            );

        $carro = CarrosTrabalho::find($request->input('id'));

        $carro->update($request->all());

        return redirect()->route('dashboard')->with('carroEditado', 'Carro editado com sucesso!');
    }

    public function apagarCarro($id){
        $carro = CarrosTrabalho::find($id);

        $carro->delete();

        return redirect()->route('dashboard')->with('carroApagado', 'Carro apagado com sucesso');
    }
}
