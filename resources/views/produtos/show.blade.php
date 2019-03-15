@extends('templates.master')

@section('conteudo-view')

<header>
	<h1>{{ $produto->nome }}</h1>
</header>

<!-- Colocar os detalhes aqui -->
Valor: R$ {{ $produto->valor }} <br>
Descrição completa: {{ $produto->descricao }}

@endsection