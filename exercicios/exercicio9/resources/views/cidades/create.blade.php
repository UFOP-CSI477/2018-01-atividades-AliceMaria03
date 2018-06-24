@extends ('layout.principal')
@section('conteudo')
<h1>Inserir cidade</h1>
<form method="post" action="{{route('cidades.store')}}">
	@csrf
	<p>Nome:<input type="text" name="nome"></p>
	<p>ID do Estado:<input type="number" name="estado_id"></p>
	<p>Enviar<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
