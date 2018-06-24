@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('cidades.create')}}">Inserir Cidade</a>
	<table>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>ID do Estado</th>
			<th>Ação</th>
		</tr>

		
@foreach($cidades as $c)
<tr>
	<td>{{$c->id}}</td>
	<td>{{$c->nome}}</td>
	<td>{{$c->estado_id}}</td>
	<td><a href="/cidades/{{$c->id}}">Exibir</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

