@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('procedures.create')}}">Inserir Procedimento</a>
	<table>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>ID do Usuário</th>
			<th>Ação</th>
		</tr>

		
@foreach($procedures as $p)
<tr>
	<td>{{$p->id}}</td>
	<td>{{$p->name}}</td>
	<td>{{$p->price}}</td>
	<td>{{$p->user_id}}</td>
	<td><a href="/procedures/{{$p->id}}">Exibir</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

