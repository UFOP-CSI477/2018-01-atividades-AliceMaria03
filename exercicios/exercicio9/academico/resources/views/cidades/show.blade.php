@extends('layout.principal')
@section('conteudo')
<h1> Dados da Cidade</h1>
<p>Codigo:{{$cidade->id}}</p>
<p>Nome:{{$cidade->nome}}</p>
<p>Sigla:{{$cidade->estado->nome}}</p>
<a href="{{route('cidades.index)}}">Voltar</a>
<a href="{{route('cidades.edit',$cidade->id)}}">Editar</a>
<form method="post" onsubmit="return confirm('Confirma exclusão da cidade?');" action="{{route('cidades.destroy',$cidade->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')