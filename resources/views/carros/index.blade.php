@extends('template_admin.index')

@section('conteudo')

    <h2>Você está na view carros</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Ano</th>
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
                    <td>
                        <a href="{{ route('carro.buscar', $linha->id) }}" class="btn btn-primary">E</a>
                        <a href="{{ route('carro.apagar', $linha->id) }}" class="btn btn-danger">A</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    <div class="form-group">
        <a href={{ route('carros.cadastrar')}} class="btn btn-success">Novo</a>
    </div>

@endsection
