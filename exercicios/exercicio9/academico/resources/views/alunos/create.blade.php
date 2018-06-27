@extends ('layout.principal')
@section('conteudo')
<h1>Inserir aluno</h1>
<form method="post" action="{{route('alunos.store')}}">
	@csrf
	<p>Nome:<input type="text" name="nome"></p>
	<p>Rua:<input type="text" name="rua"></p>
	<p>Número:<input type="number" name="numero"></p>
	<p>Bairro:<input type="text" name="bairro"></p>
	<p>ID da Cidade:<input type="number" name="cidade_id"></p>
	<p>CEP:<input type="text" name="cep"></p>
	<p>Email<input type="text" name="mail"></p>
	<p>Incluir<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
