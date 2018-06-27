@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar Usuário:{{$user->id}}</h1>
<form method="post" action="{{route('users.update',['user' => $user->id])}}">
	@csrf
	@method('PATCH')
	<p>Nome:<input type="text" name="name" value="{{$test->name}}"></p>
	<p>Email:<input type="text" name="email" value="{{$test->email}}"></p>
	<p>Senha:<input type="text" name="password" value="{{$test->password}}"></p>
	<p>Tipo:<input type="number" name="type" value="{{$test->type}}"></p>
	<p>Atualizar<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
