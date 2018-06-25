@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar procedimento:{{$procedure->id}}</h1>
<form method="post" action="{{route('procedures.update',['procedure' => $procedure->id])}}">
	@csrf
	@method('PATCH')
	<p>Nome:<input type="text" name="name" value="{{$procedure->name}}"></p>
	<p>Preço:<input type="number" name="price" value="{{$procedure->price}}"></p>
	<p>ID do Usuário:<input type="number" name="user_id" value="{{$procedure->user_id}}"></p>
	<p>Atualizar<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
