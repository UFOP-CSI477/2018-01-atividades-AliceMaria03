
@extends('layout.principal')
@section('conteudo')
<h1> Dados do Procedimento</h1>
<p>Codigo:{{$procedure->id}}</p>
<p>Nome:{{$procedure->name}}</p>
<p>Preço:{{$procedure->price}}</p>
<p>ID do Usuário:{{$procedure->user_id}}</p>
<a href="/procedures">Voltar</a>
<a href="{{route('procedures.edit',$procedure->id)}}">Editar</a>
<form method="post" action="{{route('procedures.destroy',$procedure->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')