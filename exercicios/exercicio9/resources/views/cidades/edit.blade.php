@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar cidade:{{$cidade->id}}</h1>
<form method="post" action="{{route('cidades.update',['cidade' => $cidade->id])}}">
	@csrf
	@method('PATCH')
	<p>Nome:<input type="text" name="nome" value="{{$cidade->nome}}"></p>
	<p>ID do Estado:<input type="number" name="estado_id" value="{{$cidade->estado_id}}"></p>
	<p>Atualizar:<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
