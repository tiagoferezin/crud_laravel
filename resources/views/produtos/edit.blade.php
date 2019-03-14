@extends('templates.master')

@section('conteudo-view')

@if(session('success'))
<h3>{{ session('success')['messages'] }}</h3>
@endif

{!! Form::model($produto, ['route' => ['produtos.update', $produto->id], 'method' => 'put', 'class' => 'form-padrao']) !!}
	@include('templates.formulario.input', ['label' => 'Nome do produto', 'input' => 'nome', 'attributes' => ['placeholder' => 'Nome do produto']])
	@include('templates.formulario.number', ['label' => 'Valor', 'input' => 'valor'])
	@include('templates.formulario.input', ['label' => 'Breve Descrição', 'input' => 'breve_descricao', 'attributes' => ['placeholder' => 'Breve Descrição do Produto']])
	@include('templates.formulario.input', ['label' => 'Descrição', 'input' => 'descricao', 'attributes' => ['placeholder' => 'Descrição completa e detalhada do produto']])
	@include('templates.formulario.submit', ['input' => 'Atualizar'])
{!! Form::close() !!}

@endsection