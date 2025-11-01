<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index(){
        $clientes = Clientes::all();

        echo "Chegou no controller clientes";

        return view('clientes.index', compact('clientes'));
    }

    public function recebeDados(Request $request){

        $validar = $request->validate(
            [
                'nomeCompleto' => 'required|min:3',
                'cpf' => 'required',
                'dataNasc' => 'required',
                'email' => 'required|email',
                'endereco' => 'required'
            ],
            [
                'nomeCompleto.required' => 'O campo nome é obrigatório',
                'nomeCompleto.min' => 'O campo nome precisa de pelo menos min:',
                'cpf.required' => 'O campo cpf é obrigatório',
                'dataNasc.required' => 'O campo dataNasc é obrigatório',
                'email.required' => 'O campo email é obrigatório',
                'email.email' => 'O campo email é obrigatório ser email',
                'endereco.required' => 'O campo endereco é obrigatório'
            ]
        );

        $cliente = new Clientes();

        $cliente->nomeCompleto = $request->input('nomeCompleto');
        $cliente->cpf = $request->input('cpf');
        $cliente->dataNasc = $request->input('dataNasc');
        $cliente->email = $request->input('email');
        $cliente->endereco = $request->input('endereco');

        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente incluído com sucesso');
    }

    public function templateAdmin(){
        return view('template_admin.index');
    }

    public function clientesCadastro(){
        return view('clientes.cadastro');
    }

    public function buscarCliente($id){
        $cliente = Clientes::find($id);

        if(!$cliente)
            echo "Cliente não encontrado";

        return view('clientes.alterar', compact('cliente'));

    }

    public function alterarCliente(Request $request){

        $validar = $request->validate(
            [
                'nomeCompleto' => 'required|min:3',
                'cpf' => 'required',
                'dataNasc' => 'required',
                'email' => 'required|email',
                'endereco' => 'required'
            ],
            [
                'nomeCompleto.required' => 'O campo nome é obrigatório',
                'nomeCompleto.min' => 'O campo nome precisa de pelo menos min:',
                'cpf.required' => 'O campo cpf é obrigatório',
                'dataNasc.required' => 'O campo dataNasc é obrigatório',
                'email.required' => 'O campo email é obrigatório',
                'email.email' => 'O campo email é obrigatório ser email',
                'endereco.required' => 'O campo endereco é obrigatório'
            ]
        );

        $cliente = Clientes::find($request->input('id'));
        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('alterado', 'Cliente alterado com sucesso');
    }

    public function excluirCliente($id){

        $cliente = Clientes::find($id);

        $cliente->delete();

        return redirect()->route('clientes.index')->with('excluido', 'Cliente excluído com sucesso');

    }

    public function produtos(){
        return view('produtos.index');
    }

}
