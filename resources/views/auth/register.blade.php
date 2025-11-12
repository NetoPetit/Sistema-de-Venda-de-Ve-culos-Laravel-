@extends('template_admin.index')

@section('conteudo')

<div id="main-wrapper">
  <div class="container">
    <div class="row aln-center">
      <div class="col-6 col-12-medium">

        <section class="box">
          <header class="major">
            <h2>Crie sua conta</h2>
            <p>Preencha os dados abaixo para se cadastrar</p>
          </header>

          {{-- Exibição de erros --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $erro)
                  <li>{{ $erro }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          {{-- Formulário de cadastro --}}
          <form action="{{ route('register.store') }}" method="post">
            @csrf

            <div class="row gtr-25">
              <div class="col-12">
                <label for="name"><strong>Nome completo</strong></label>
                <input type="text" name="name" id="name" placeholder="Digite seu nome completo" value="{{ old('name') }}" />
              </div>

              <div class="col-12">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" placeholder="exemplo@email.com" value="{{ old('email') }}" />
              </div>

              <div class="col-6 col-12-small">
                <label for="password"><strong>Senha</strong></label>
                <input type="password" name="password" id="password" placeholder="Digite sua senha" />
              </div>

              <div class="col-6 col-12-small">
                <label for="password_confirmation"><strong>Confirmar senha</strong></label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme sua senha" />
              </div>

              <div class="row">
                    <div class="col-5">
                        <button type="submit" class="button primary icon solid fa-user-plus">Cadastrar</button>
                    </div>
                    <div class="col-7">

                        <a href="{{ route('login') }}" class="button alt icon solid fa-sign-in-alt">Já tenho conta</a>

                    </div>
              </div>
            </div>
          </form>
        </section>

      </div>
    </div>
  </div>
</div>

{{-- Estilização adicional (mantém padrão Verti, mas deixa mais moderno) --}}
<style>
  .box {
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    border-radius: 8px;
    padding: 2rem;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 0.8rem;
    font-size: 1rem;
    transition: all 0.2s ease;
  }

  input:focus {
    border-color: #f56a6a;
    outline: none;
    box-shadow: 0 0 0 3px rgba(245, 106, 106, 0.2);
  }

  label {
    display: block;
    margin-bottom: 0.4rem;
    color: #444;
  }

  .alert-danger {
    background: #ffe6e6;
    color: #b30000;
    padding: 1rem;
    border-radius: 6px;
    margin-bottom: 1.5rem;
    list-style: none;
  }

  .button.primary {
    background-color: #f56a6a !important;
    border-color: #f56a6a !important;
    color: white !important;
  }

  .button.alt {
    background-color: #eee !important;
    color: #333 !important;
  }
</style>

@endsection
