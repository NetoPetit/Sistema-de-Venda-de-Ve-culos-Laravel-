@extends('template_admin.index')

@section('conteudo')

<div id="main-wrapper">
  <div class="container">
    <div class="row aln-center">
      <div class="col-8 col-12-medium">

        <section class="box">
          <header class="major">
            <h2>Cadastrar novo carro</h2>
            <p>Preencha os campos abaixo para adicionar um novo anúncio</p>
          </header>

          {{-- Exibir erros de validação --}}
          @if ($errors->any())
            <div class="alert alert-danger error-message">
              <i class="icon solid fa-exclamation-triangle"></i>
              <ul>
                @foreach ($errors->all() as $erro)
                  <li>{{ $erro }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('salvarCadastroCarro') }}" method="post" class="styled-form">
            @csrf

            <div class="row gtr-25">
              <div class="col-6 col-12-small">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" value="{{ old('marca') }}" placeholder="Ex: Toyota">
                @error('marca') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}" placeholder="Ex: Corolla">
                @error('modelo') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="cor">Cor</label>
                <input type="text" name="cor" id="cor" value="{{ old('cor') }}" placeholder="Ex: Branco">
                @error('cor') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="ano_fabricacao">Ano de Fabricação</label>
                <input type="number" name="ano_fabricacao" id="ano_fabricacao" value="{{ old('ano_fabricacao') }}" placeholder="Ex: 2020">
                @error('ano_fabricacao') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="quilometragem">Quilometragem</label>
                <input type="number" name="quilometragem" id="quilometragem" value="{{ old('quilometragem') }}" placeholder="Ex: 45000">
                @error('quilometragem') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="valor">Valor (R$)</label>
                <input type="text" name="valor" id="valor" value="{{ old('valor') }}" placeholder="Ex: 85000">
                @error('valor') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-12">
                <label for="detalhes">Detalhes</label>
                <textarea name="detalhes" id="detalhes" rows="5" placeholder="Adicione uma breve descrição do carro">{{ old('detalhes') }}</textarea>
                @error('detalhes') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              {{-- Campo de imagens --}}
              <div class="col-4 col-12-small">
                <label for="img1">Imagem 1 (Principal)</label>
                <input type="text" name="img1" id="img1" value="{{ old('img1') }}" placeholder="URL da imagem 1">
                @error('img1') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-4 col-12-small">
                <label for="img2">Imagem 2</label>
                <input type="text" name="img2" id="img2" value="{{ old('img2') }}" placeholder="URL da imagem 2">
                @error('img2') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-4 col-12-small">
                <label for="img3">Imagem 3</label>
                <input type="text" name="img3" id="img3" value="{{ old('img3') }}" placeholder="URL da imagem 3">
                @error('img3') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-12">
                <ul class="actions special">
                  <li><button type="submit" class="button primary icon solid fa-plus-circle">Cadastrar</button></li>
                  <li><a href="{{ route('dashboard') }}" class="button alt icon solid fa-arrow-left">Voltar</a></li>
                </ul>
              </div>
            </div>
          </form>
        </section>

      </div>
    </div>
  </div>
</div>

{{-- CSS Personalizado --}}
<style>
  label {
    font-weight: 600;
    color: #333;
    display: block;
    margin-bottom: 6px;
  }

  input[type="text"], input[type="number"], textarea {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 10px;
    font-size: 1rem;
    transition: border-color 0.2s, box-shadow 0.2s;
    margin-bottom: 12px;
  }

  input:focus, textarea:focus {
    border-color: #f56a6a;
    box-shadow: 0 0 0 3px rgba(245, 106, 106, 0.15);
    outline: none;
  }

  textarea {
    resize: vertical;
  }

  .error-message {
    background: #ffe6e6;
    border-left: 5px solid #e74c3c;
    padding: 1rem;
    border-radius: 6px;
    margin-bottom: 1.5rem;
  }

  .button.primary {
    background-color: #f56a6a !important;
    color: #fff !important;
    border: none !important;
  }

  .button.primary:hover {
    background-color: #ff7b7b !important;
  }

  .button.alt {
    background-color: #eee !important;
    color: #333 !important;
  }

  .text-danger {
    color: #d9534f !important;
  }
</style>

@endsection
