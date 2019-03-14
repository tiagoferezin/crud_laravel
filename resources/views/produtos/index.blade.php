@extends('templates.master')

@section('conteudo-view')

@if(session('success'))
<h3>{{ session('success')['messages'] }}</h3>
@endif

{!! Form::open(['route' => 'produtos.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
@include('templates.formulario.input', ['label' => 'Nome do produto', 'input' => 'nome', 'attributes' => ['placeholder' => 'Nome do produto']])
@include('templates.formulario.number', ['label' => 'Valor', 'input' => 'valor'])
@include('templates.formulario.input', ['label' => 'Breve Descrição', 'input' => 'breve_descricao', 'attributes' => ['placeholder' => 'Breve Descrição do Produto']])
@include('templates.formulario.input', ['label' => 'Descrição', 'input' => 'descricao', 'attributes' => ['placeholder' => 'Descrição completa e detalhada do produto']])
@include('templates.formulario.submit', ['input' => 'Cadastrar Produto'])
{!! Form::close() !!}

<table class="table table-bordered table-hover display">
	
	<thead>
		<tr>
			<th>Nome do Produto</th>
			<th>Breve descrição</th>
			<th>Detalhes</th>
			<th>Editar</th>
			<th>Remover</th>
		</tr>
	</thead>

	<tbody>
		@foreach($produtos as $produto)
		<tr>
			<td>{{ $produto->nome }}</td>
			<td>{{ $produto->breve_descricao }}</td>
			<td><a href="{{ route('produtos.show', $produto->id) }}">Detalhes</a></td>
			<td><a href="{{ route('produtos.edit', $produto->id) }}">Editar</a></td>
			<td>
				
				{!! Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'delete']) !!}
				{!! Form::submit("Remover") !!}
				{!! Form::close() !!}

			</td>
		</tr>
		@endforeach()
	</tbody>

</table>

@endsection()