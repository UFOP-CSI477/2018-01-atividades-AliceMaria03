@extends('layout.principal')
@section('conteudo')
<h1> Dados do Aluno</h1>
<p>Codigo:{{$aluno->id}}</p>
<p>Nome:{{$aluno->nome}}</p>
<p>Rua:{{$aluno->rua}}</p>
<p>Bairro:{{$aluno->bairro}}</p>
<p>ID Cidade:{{$aluno->cidade_id}}</p>
<p>CEP:{{$aluno->cep}}</p>
<p>Email:{{$aluno->mail}}</p>
<a href="/alunos">Voltar</a>
<a href="{{route('alunos.edit',$aluno->id)}}">Editar</a>
<form method="post" action="{{route('alunos.destroy',$aluno->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')