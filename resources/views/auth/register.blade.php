@extends('template_admin.index')

@section('conteudo')

    <h1>Cadastro do novo Admin</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{$erro}}
            </div>
        @endforeach
    @endif

    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="{{ old('name')}}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ old('email')}}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" value="{{ old('password')}}">
        </div>
        <div class="mb-3">
          <label for="endereco" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" value="{{ old('password_confirmation')}}">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

@endsection
