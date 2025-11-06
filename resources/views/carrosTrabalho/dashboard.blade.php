@extends('template_admin.index')

@section('conteudo')

    @if (session('carroCadastrado'))
        <div class="alert alert-success" role="alert">
                {{ session('carroCadastrado') }}
        </div>
    @endif


    @if (session('carroEditado'))
        <div class="alert alert-success" role="alert">
                {{ session('carroEditado') }}
        </div>
    @endif

    @if (session('carroApagado'))
        <div class="alert alert-success" role="alert">
                {{ session('carroApagado') }}
        </div>
    @endif

    @auth

    <h2>Seja bem vindo ao paínel Admin!!!</h2>

    @endauth

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Ano</th>
                <th>Quilometragem</th>
                <th>Valor</th>
                <th>Detalhes</th>
                <th>Foto</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($carros as $linha)
                <tr>
                    <td>{{ $linha->marca }}</td>
                    <td>{{ $linha->modelo }}</td>
                    <td>{{ $linha->cor }}</td>
                    <td>{{ $linha->ano_fabricacao }}</td>
                    <td>{{ $linha->quilometragem }} Km</td>
                    <td>R$ {{ $linha->valor }}</td>
                    <td>{{ $linha->detalhes }}</td>
                    <td><img src="{{ $linha->img1 }}" alt="imagem carro" width="200px"></td>
                    <td>
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('buscarCarroTrabalho', $linha->id) }}" class="btn btn-primary">E</a>
                                <a href="{{ route('apagarCarroTrabalho', $linha->id) }}" class="btn btn-danger">A</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    <div class="form-group">
        <a href={{ route('cadastrarCarro')}} class="btn btn-success">Novo</a>
    </div>

@endsection

