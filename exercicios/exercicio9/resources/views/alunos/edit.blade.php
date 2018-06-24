@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar Aluno:{{$aluno->id}}</h1>
<form method="post" action="{{route('alunos.update',['aluno' => $aluno->id])}}">
	@csrf
	@method('PATCH')
	<p>Nome:<input type="text" name="nome" value="{{$aluno->nome}}"></p>
	<p>Rua:<input type="text" name="rua" value="{{$alunoo->rua}}"></p>
	<p>Numero:<input type="number" name="numero" value="{{$aluno->numero}}"></p>
	<p>Bairro:<input type="text" name="bairro" value="{{$aluno->bairro}}"></p>
	<p>ID da Cidade:<input type="number" name="cidade_id" value="{{$aluno->cidade_id}}"></p>
	<p>CEP:<input type="text" name="cep" value="{{$aluno->cep}}"></p>
	<p>Email:<input type="text" name="mail" value="{{$aluno->mail}}"></p>
	<p>Atualizar<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
