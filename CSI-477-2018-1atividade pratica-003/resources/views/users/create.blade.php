@extends ('layout.principal')
@section('conteudo')
<h1>Inserir Usuários</h1>
<form method="post" action="{{route('users.store')}}">
	@csrf
	<p>Nome:<input type="text" name="name"></p>
	<p>Email:<input type="text" name="email"></p>
	<p>Senha:<input type="text" name="password"></p>
	<p>Tipo:<input type="number" name="type"></p>
	<p>Inserir<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
