@extends('layout.principal')
@section('conteudo')
<h1> Dados do Aluno</h1>
<p>Codigo:{{$aluno->id}}</p>
<p>Nome:{{$aluno->nome}}</p>
<p>Rua:{{$aluno->rua}}</p>
<p>Numero:{{$aluno->numero}}</p>
<p>Bairro:{{$aluno->bairro}}</p>
<p>ID da cidade:{{$aluno->cidade_id}}</p>
<p>CEP:{{$aluno->sigla}}</p>
<p>Email:{{$aluno->sigla}}</p>

<a href="/aluno">Voltar</a>
<a href="{{route('alunos.edit',$aluno->id)}}">Editar</a>
<form method="post" onsubmit="return confirm('Confirma exclusão do aluno?');" action="{{route('alunos.destroy',$aluno->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')