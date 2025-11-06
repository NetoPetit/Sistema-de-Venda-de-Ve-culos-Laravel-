@extends('template_admin.index')

@section('conteudo')

    @guest

    <h2>Seja bem vindo Visitante!!!</h2>

    @endguest

    @auth

    <h2>Seja bem vindo Admin!!!</h2>

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
                    <td>
                        <img src="{{ $linha->img1 }}" alt="imagem carro" width="200px">
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

@endsection

