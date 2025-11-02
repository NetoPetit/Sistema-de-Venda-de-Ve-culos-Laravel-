@extends('template_admin.index')

@section('conteudo')

    <h2>Cadastrar novo carro</h2>

    <div class="container">
        <form action="{{ route('salvarCadastroCarro') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Marca</span>
                        <input type="text" name="marca" id="marca" class="form-control" value="{{ old('marca') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Modelo</span>
                        <input type="text" name="modelo" id="modelo" class="form-control" value="{{ old('modelo') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Cor</span>
                        <input type="text" name="cor" id="cor" class="form-control" value="{{ old('cor') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Ano Fabricação</span>
                        <input type="text" name="ano_fabricacao" id="ano_fabricacao" class="form-control" value="{{ old('ano_fabricacao') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Quilometragem</span>
                        <input type="text" name="quilometragem" id="quilometragem" class="form-control" value="{{ old('quilometragem') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Valor</span>
                        <input type="text" name="valor" id="valor" class="form-control" value="{{ old('valor') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Img 1</span>
                        <input type="text" name="img1" id="img1" class="form-control" value="{{ old('img1') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Img 2</span>
                        <input type="text" name="img2" id="img2" class="form-control" value="{{ old('img2') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Img 3</span>
                        <input type="text" name="img3" id="img3" class="form-control" value="{{ old('img3') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <input type="submit" value="Cadastrar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>

@endsection
