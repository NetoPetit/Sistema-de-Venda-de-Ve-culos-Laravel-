@extends('template_admin.index')

@section('conteudo')

    <h1>Cadastro de Cliente</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{$erro}}
            </div>
        @endforeach
    @endif

    <form action="{{ route('cliente.novo') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="nomeCompleto" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" placeholder="Digite seu nome" value="{{ old('nomeCompleto')}}">
        </div>
        <div class="mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{ old('cpf')}}">
        </div>
        <div class="mb-3">
          <label for="dataNasc" class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control" id="dataNasc" name="dataNasc" value="{{ old('dataNasc')}}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ old('email')}}">
        </div>
        <div class="mb-3">
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Sexo</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" value="{{ old('endereco')}}">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

@endsection
