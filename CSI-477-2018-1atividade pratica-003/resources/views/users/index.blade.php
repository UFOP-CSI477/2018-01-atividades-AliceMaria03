@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('users.create')}}">Inserir Usuário</a>
	<table>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Senha</th>
			<th>Tipo</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>

		
@foreach($users as $u)
<tr>
	<td>{{$u->id}}</td>
	<td>{{$u->name}}</td>
	<td>{{$u->email}}</td>
	<td>{{$u->password}}</td>
	<td>{{$u->type}}</td>

	<td><a href="/users/{{$u->id}}">Exibir</a></td>
	<td><a href="/users/{{$u->id}}">Excluir</a></td>

</tr>


@endforeach 
</table>
@endsection('conteudo')

