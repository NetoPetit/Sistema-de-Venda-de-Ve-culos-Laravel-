@extends('template_admin.index')

@section('conteudo')
<div id="main-wrapper">
    <div class="container">
        <div class="row aln-top">

            <div class="col-7 col-12-medium">
                <section class="box">
                    <div class="image featured">
                        <img id="mainImage" src="{{ $carro->img1 }}" alt="Imagem principal do carro">
                    </div>

                    <div class="row gtr-25">
                        <div class="col-4">
                            <img src="{{ $carro->img1 }}" class="thumb" alt="thumb 1">
                        </div>
                        <div class="col-4">
                            <img src="{{ $carro->img2 }}" class="thumb" alt="thumb 2">
                        </div>
                        <div class="col-4">
                            <img src="{{ $carro->img3 }}" class="thumb" alt="thumb 3">
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-5 col-12-medium">
                <section class="box">
                    <header>
                        <h2>{{ $carro->marca }} {{ $carro->modelo }}</h2>
                        <p><strong>Cor: </strong>{{ $carro->cor }}</p>
                        <p><strong>Ano:</strong> {{ $carro->ano_fabricacao }}</p>
                        <p><strong>Km:</strong> {{ $carro->quilometragem }}</p>
                        <p><strong>Preço:</strong> R$ {{ $carro->valor }}</p>
                    </header>

                    <p><strong>Detalhes:</strong></p>
                    <p>{{ $carro->detalhes }}</p>

                    <ul class="actions">
                        <li><a href="{{ route('index') }}" class="button alt">Voltar</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.thumb').forEach(img => {
        img.addEventListener('click', e => {
            document.getElementById('mainImage').src = e.target.src;
        });
    });
</script>

<style>
.thumb {
    width: 100%;
    border-radius: 6px;
    cursor: pointer;
    transition: transform 0.2s;
}
.thumb:hover {
    transform: scale(1.05);
}
#mainImage {
    border-radius: 8px;
    width: 100%;
    height: auto;
}
</style>
@endsection
