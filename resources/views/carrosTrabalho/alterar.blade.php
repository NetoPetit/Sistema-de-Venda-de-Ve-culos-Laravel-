@extends('template_admin.index')

@section('conteudo')

<div id="main-wrapper">
  <div class="container">
    <div class="row aln-center">
      <div class="col-8 col-12-medium">

        <section class="box">
          <header class="major">
            <h2>Editar informações do carro</h2>
            <p>Atualize os detalhes do anúncio abaixo</p>
          </header>

          {{-- Mensagens de erro --}}
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

          <form action="{{ route('editarCarroTrabalho') }}" method="post" class="styled-form">
            @csrf

            <input type="hidden" name="id" value="{{ $carro->id }}">

            <div class="row gtr-25">
              <div class="col-6 col-12-small">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" value="{{ $carro->marca }}" placeholder="Ex: Toyota">
                @error('marca') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" value="{{ $carro->modelo }}" placeholder="Ex: Corolla">
                @error('modelo') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="cor">Cor</label>
                <input type="text" name="cor" id="cor" value="{{ $carro->cor }}" placeholder="Ex: Preto">
                @error('cor') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="ano_fabricacao">Ano de Fabricação</label>
                <input type="number" name="ano_fabricacao" id="ano_fabricacao" value="{{ $carro->ano_fabricacao }}">
                @error('ano_fabricacao') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="quilometragem">Quilometragem</label>
                <input type="number" name="quilometragem" id="quilometragem" value="{{ $carro->quilometragem }}" placeholder="Ex: 45000">
                @error('quilometragem') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-6 col-12-small">
                <label for="valor">Valor (R$)</label>
                <input type="text" name="valor" id="valor" value="{{ $carro->valor }}" placeholder="Ex: 85000">
                @error('valor') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="col-12">
                <label for="detalhes">Detalhes</label>
                <textarea name="detalhes" id="detalhes" rows="5" placeholder="Adicione uma descrição do veículo">{{ old('detalhes', $carro->detalhes) }}</textarea>
                @error('detalhes') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              {{-- Imagens --}}
              <div class="col-4 col-12-small">
                <label for="img1">Imagem 1 (Principal)</label>
                <input type="text" name="img1" id="img1" value="{{ $carro->img1 }}">
                @if($carro->img1)
                  <img src="{{ $carro->img1 }}" class="thumb-preview">
                @endif
              </div>

              <div class="col-4 col-12-small">
                <label for="img2">Imagem 2</label>
                <input type="text" name="img2" id="img2" value="{{ $carro->img2 }}">
                @if($carro->img2)
                  <img src="{{ $carro->img2 }}" class="thumb-preview">
                @endif
              </div>

              <div class="col-4 col-12-small">
                <label for="img3">Imagem 3</label>
                <input type="text" name="img3" id="img3" value="{{ $carro->img3 }}">
                @if($carro->img3)
                  <img src="{{ $carro->img3 }}" class="thumb-preview">
                @endif
              </div>

              <div class="col-12">
                <ul class="actions special">
                  <li><button type="submit" class="button primary icon solid fa-save">Salvar alterações</button></li>
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

{{-- CSS personalizado --}}
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

  .thumb-preview {
    width: 100%;
    max-width: 160px;
    margin-top: 8px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .button.primary {
    background-color: #f56a6a !important;
    color: white !important;
    border: none !important;
  }

  .button.primary:hover {
    background-color: #ff7b7b !important;
  }

  .error-message {
    background: #ffe6e6;
    border-left: 5px solid #e74c3c;
    padding: 1rem;
    border-radius: 6px;
    margin-bottom: 1.5rem;
  }

  .text-danger {
    color: #d9534f !important;
  }
</style>

@endsection
