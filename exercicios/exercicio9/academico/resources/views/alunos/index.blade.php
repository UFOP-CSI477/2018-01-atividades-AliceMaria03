@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('alunos.create')}}">Inserir Aluno</a>
	<table>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Rua</th>
			<th>Número</th>
			<th>Bairro</th>
			<th>ID da cidade</th>
			<th>CEP</th>
			<th>Email</th>
			<th>Ação</th>
		</tr>

		
@foreach($alunos as $a)
<tr>
	<td>{{$a->id}}</td>
	<td>{{$a->nome}}</td>
	<td>{{$a->rua}}</td>
	<td>{{$a->numero}}</td>
	<td>{{$a->bairro}}</td>
	<td>{{$a->cidade_id}}</td>
	<td>{{$a->cep}}</td>
	<td>{{$a->mail}}</td>

	<td><a href="{{route('alunos.show',$a->id)}}">Exibir</a></td>
	<td><a href="{{route('alunos.edit',$a->id)}}">Editar</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

