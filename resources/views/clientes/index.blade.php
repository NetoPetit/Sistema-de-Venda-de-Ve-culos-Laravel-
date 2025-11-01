@extends('template_admin.index')

@section('conteudo')
    <h2>Você está na view clientes</h2>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
                {{ session('success') }}
        </div>
    @endif

    @if (session('alterado'))
        <div class="alert alert-success" role="alert">
                {{ session('alterado') }}
        </div>
    @endif

    @if (session('excluido'))
        <div class="alert alert-success" role="alert">
            {{ session('excluido') }}
        </div>

    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{$erro}}
            </div>
        @endforeach
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($clientes as $linha)
                <tr>
                    <td>{{ $linha->nomeCompleto }}</td>
                    <td>{{ $linha->cpf }}</td>
                    <td>{{ $linha->dataNasc }}</td>
                    <td>{{ $linha->email }}</td>
                    <td>{{ $linha->endereco }}</td>
                    <td>{{ $linha->sexo }}</td>
                    <td>
                        <a href="{{ route('cliente.buscar', $linha->id) }}" class="btn btn-primary">E</a>
                        <a href="{{ route('cliente.excluir', $linha->id) }}" class="btn btn-danger">A</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{ route('cliente.novo') }}" class="btn btn-primary">Cadastrar</a>

@endsection

