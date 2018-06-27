@extends ('layout.principal')
@section('conteudo')
<h1>Inserir cidade</h1>
<a href="{{route('cidades.index')}}">Voltar</a>
<form method="post" action="{{url('/cidades')}}">
	@csrf
	<p>Nome:<input type="text" name="nome"></p>
	Estado:
	<select name="estado_id">
		<option value="">Selecione:</option>
		<!-- Dados do Estado -->

		@foreach($estados as $e)
			<option value="{{$e->id}}">{{$e->nome}}-{{$e->sigla}}</option>
		@endforeach
	</select>
	<p>Incluir<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
