@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('tests.create')}}">Inserir Exame</a>
	<table>
		<tr>
			<th>Código</th>
			<th>ID do Usuário</th>
			<th>ID do Procedimento</th>
			<th>Data</th>
			<th>Ação</th>
		</tr>

		
@foreach($tests as $t)
<tr>
	<td>{{$t->id}}</td>
	<td>{{$t->user_id}}</td>
	<td>{{$t->procedure_id}}</td>
	<td>{{$t->date}}</td>
	<td><a href="/tests/{{$t->id}}">Exibir</a></td>
	<td><a href="/tests/{{$t->id}}">Editar</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

