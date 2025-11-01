@extends('template_admin.index')

@section('conteudo')

    @if (session('success'))
        <div class="alert alert-success" role="alert">
                {{ session('success') }}
        </div>
    @endif

    @guest

    <h2>Seja bem vindo Visitante!!!</h2>

    @endguest

    @auth

    <h2>Seja bem vindo Admin!!!</h2>

    @endauth

@endsection

