@extends('template_admin.index')

@section('conteudo')

    <h2>Editar informações do carro</h2>

    <div class="container">
        <form action="{{ route('editarCarroTrabalho') }}" method="post">
            @csrf
            <input type="text" name="id" id="id" class="form-control" value="{{ $carro->id }}" hidden>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Marca</span>
                        <input type="text" name="marca" id="marca" class="form-control" value="{{ $carro->marca }}">
                        @error('marca')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Modelo</span>
                        <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $carro->modelo }}">
                        @error('modelo')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Cor</span>
                        <input type="text" name="cor" id="cor" class="form-control" value="{{ $carro->cor }}">
                        @error('cor')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Ano Fabricação</span>
                        <input type="text" name="ano_fabricacao" id="ano_fabricacao" class="form-control" value="{{ $carro->ano_fabricacao }}">
                        @error('ano_fabricacao')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Quilometragem</span>
                        <input type="text" name="quilometragem" id="quilometragem" class="form-control" value="{{ $carro->quilometragem }}">
                        @error('quilometragem')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Valor</span>
                        <input type="text" name="valor" id="valor" class="form-control" value="{{ $carro->valor }}">
                        @error('valor')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Detalhes</span>
                        <textarea type="text" rows="3" name="detalhes" id="detalhes" class="form-control">{{ old('detalhes', $carro->detalhes) }}</textarea>
                        @error('detalhes')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Img 1</span>
                        <input type="text" name="img1" id="img1" class="form-control" value="{{ $carro->img1 }}">
                        @error('img1')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Img 2</span>
                        <input type="text" name="img2" id="img2" class="form-control" value="{{ $carro->img2 }}">
                        @error('img2')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Img 3</span>
                        <input type="text" name="img3" id="img3" class="form-control" value="{{ $carro->img3 }}">
                        @error('img3')
                            <div class="text-danger mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <input type="submit" value="Editar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>

@endsection
