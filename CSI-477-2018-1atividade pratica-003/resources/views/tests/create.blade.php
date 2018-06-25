@extends ('layout.principal')
@section('conteudo')
<h1>Inserir Testes</h1>
<form method="post" action="{{route('tests.store')}}">
	@csrf
	<p>ID do Usuário:<input type="number" name="user_id"></p>
	<p>ID do Procedimento:<input type="number" name="procedure_id"></p>
	<p>Data:<input type="date" name="date"></p>
	<p>Inserir<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
