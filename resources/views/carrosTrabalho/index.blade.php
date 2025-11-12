@extends('template_admin.index')


@section('banner')
  <!-- Banner -->
	<div id="banner-wrapper">
		<div id="banner" class="box container">
			<div class="row">
				<div class="col-7 col-12-medium">

                    @guest

                        <h2>Seja bem vindo Visitante!!!</h2>
                        <p>realize seu sonho sobre quatro rodas com quem entende do assunto.</p>

                    @endguest

					@auth

                        <p>Usuário autenticado: {{ Auth::user()->name }}</p>

                        @if(Auth::user()->is_admin)
                            <h2>Seja bem vindo Admin!!!</h2>
                            <p>acesse o paínel para fazer o controle dos carros.</p>
                        @endif

                     @endauth
				</div>
				<div class="col-5 col-12-medium">
					<ul>
                        @guest

                            <li><a href="{{ route('login') }}" class="button large icon solid fa-arrow-circle-right">Login</a></li>
						    <li><a href="{{ route('register') }}" class="button alt large icon solid fa-question-circle">Primeiro acesso</a></li>

                        @endguest

                        @auth

                            @if(Auth::user()->is_admin)
                                <li><a href="{{ route('dashboard') }}" class="button large icon solid fa-arrow-circle-right">Paínel</a></li>
                            @endif

                        @endauth

					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('conteudo')
    <!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">

                            @foreach ($carros as $linha)

                                <!-- Box -->
                                <div class="col-4 col-12-medium">

								    <section class="box feature">
										<a href="{{ route('verAnuncio', $linha->id) }}" class="image featured"><img src="{{ $linha->img1 }}" alt="" /></a>
										<div class="inner">
											<header>
												<h2>{{ $linha->marca }} {{ $linha->modelo }}</h2>
											</header>
											<p><strong>Ano: </strong>{{ $linha->ano_fabricacao }}</p>
											<p><strong>Km: </strong>{{ $linha->quilometragem }}</p>
                                            <p></p>
											<p><strong>R$ </strong>{{ $linha->valor }}</p>

										</div>
									</section>

							    </div>

                            @endforeach

						</div>
					</div>
				</div>
@endsection
