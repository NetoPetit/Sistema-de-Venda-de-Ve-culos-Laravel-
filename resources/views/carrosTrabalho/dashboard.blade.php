@extends('template_admin.index')

@section('conteudo')

<div id="main-wrapper">
  <div class="container">

    {{-- MENSAGENS DE SUCESSO --}}
    @foreach (['carroCadastrado', 'carroEditado', 'carroApagado'] as $msg)
      @if (session($msg))
        <div class="alert alert-success success-message">
          <i class="icon solid fa-check-circle"></i> {{ session($msg) }}
        </div>
      @endif
    @endforeach

    @auth
      <header class="major">
        <h2>Painel do Administrador</h2>
        <p>Gerencie seus anúncios de veículos com facilidade</p>
      </header>
    @endauth

    {{-- TABELA DE CARROS --}}
    <section class="box">
      <header>
        <h3>Lista de Anúncios</h3>
      </header>

      <div class="table-wrapper">
        <table class="alt">
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
              <th class="text-center">Ações</th>
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
                  <img src="{{ $linha->img1 }}" alt="imagem carro" class="thumb-preview">
                </td>
                <td>
                  <div class="actions">
                    <a href="{{ route('buscarCarroTrabalho', $linha->id) }}" class="button small primary icon solid fa-edit">Editar</a>
                    <a href="{{ route('apagarCarroTrabalho', $linha->id) }}" class="button small alt icon solid fa-trash">Apagar</a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>

    {{-- BOTÕES DE AÇÃO --}}
    <ul class="actions special">
      <li><a href="{{ route('cadastrarCarro') }}" class="button primary icon solid fa-plus">Cadastrar novo anúncio</a></li>
      <li><a href="{{ route('index') }}" class="button alt icon solid fa-home">Voltar à página inicial</a></li>
    </ul>

  </div>
</div>

{{-- ESTILIZAÇÃO PERSONALIZADA --}}
<style>

  th {
    color: #333;
  }

  header.major {
    text-align: center;
    margin-bottom: 2rem;
  }

  .success-message {
    background: #e6ffed;
    border-left: 5px solid #2ecc71;
    color: #2c662d;
    padding: 1rem;
    border-radius: 6px;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .table-wrapper {
    overflow-x: auto;
  }

  table.alt {
    width: 100%;
    border-collapse: collapse;
    border: none;
  }

  table.alt th, table.alt td {
    text-align: center;
    padding: 0.75rem;
    border-bottom: 1px solid #e5e5e5;
  }

  table.alt th {
    background: #f8f8f8;
    font-weight: bold;
  }

  .thumb-preview {
    width: 100px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  .actions {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .actions .button.small {
    padding: 0.4rem 0.6rem;
    font-size: 0.85rem;
  }

  .button.primary {
    background: #f56a6a !important;
    color: #fff !important;
  }

  .button.alt {
    background: #ddd !important;
    color: #333 !important;
  }

  .button.primary:hover {
    background: #ff7b7b !important;
  }

  .button.alt:hover {
    background: #ccc !important;
  }

  ul.actions.special {
    justify-content: center;
    margin-top: 2rem;
  }
</style>

@endsection
