@extends('template_admin.index')

@section('conteudo')

    <h2>Alterar carro</h2>

    <div class="container">
        <form action="{{ route('carro.alterar') }}" method="post">
            @csrf
            <div class="row">
                <span>Id</span>
                <input type="text" name="id" id="id" class="form-control" value="{{ $carro->id }}">
            </div>
            <div class="row">
                <span>Marca</span>
                <input type="text" name="marca" id="marca" class="form-control" value="{{ $carro->marca }}">
            </div>
            <div class="row">
                <span>Modelo</span>
                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $carro->modelo }}">
            </div>
            <div class="row">
                <span>Cor</span>
                <input type="text" name="cor" id="cor" class="form-control" value="{{ $carro->cor }}">
            </div>
            <div class="row">
                 <div class="form-group">
                    <span>Ano Fabricação</span>
                    <input type="text" name="ano_fabricacao" id="ano_fabricacao" class="form-control" value="{{ $carro->ano_fabricacao }}">
                 </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <input type="submit" title="SALVAR" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>

@endsection
