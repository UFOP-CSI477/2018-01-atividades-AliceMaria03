
@extends('layout.principal')
@section('conteudo')
<h1> Dados do Usuário</h1>
<p>Codigo:{{$user->id}}</p>
<p>Nome:{{$user->name}}</p>
<p>Email:{{$user->email}}</p>
<p>Senha:{{$user->password}}</p>
<p>Tipo:{{$user->type}}</p>
<a href="/users">Voltar</a>
<a href="{{route('users.edit',$users->id)}}">Editar</a>
<form method="post" action="{{route('users.destroy',$user->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')