
@extends('layout.principal')
@section('conteudo')
<h1> Dados do Exame</h1>
<p>Codigo:{{$test->id}}</p>
<p>ID do Usuário:{{$test->user_id}}</p>
<p>ID do Procedimento:{{$test->procedure_id}}</p>
<p>Data:{{$test->date}}</p>
<a href="/tests">Voltar</a>
<a href="{{route('tests.edit',$test->id)}}">Editar</a>
<form method="post" action="{{route('tests.destroy',$test->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')