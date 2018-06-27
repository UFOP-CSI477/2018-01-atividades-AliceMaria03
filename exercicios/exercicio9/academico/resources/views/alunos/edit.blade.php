@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar aluno:{{$aluno->id}}</h1>
<form method="post" action="{{route('alunos.update',['aluno' => $estado->id])}}">
	@csrf
	@method('PATCH')
	<p>Nome:<input type="text" name="nome" value="{{$aluno->nome}}"></p>
	<p>Rua:<input type="text" name="rua" value="{{$aluno->rua}}"></p>
	<p>Bairro:<input type="text" name="bairro" value="{{$aluno->bairro}}"></p>
	<p>ID da cidade:<input type="text" name="cidade_id" value="{{$aluno->cidade_id}}"></p>
	<p>CEP:<input type="text" name="cep" value="{{$aluno->cep}}"></p>
	<p>Email:<input type="text" name="mail" value="{{$aluno->mail}}"></p>
	<p>Atualizar<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
