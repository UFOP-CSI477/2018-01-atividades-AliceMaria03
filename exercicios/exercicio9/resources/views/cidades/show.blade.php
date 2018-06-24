@extends('layout.principal')
@section('conteudo')
<h1> Dados da Cidade</h1>
<p>Codigo:{{$cidade->id}}</p>
<p>Nome:{{$cidade->nome}}</p>
<p>ID do Estado:{{$cidade->estado_id}}</p>
<a href="/cidades">Voltar</a>
<a href="{{route('cidades.edit',$cidade->id)}}">Editar</a>
<form method="post" action="{{route('cidades.destroy',$cidade->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')