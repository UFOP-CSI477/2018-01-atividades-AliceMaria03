@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('cidades.create')}}">Inserir Cidade</a>
	<table>
		<tr>
			
			<th>Nome</th>
			<th>ID do Estado</th>
			<th>Exibir</th>
			<th>Editar</th>
		</tr>

		
@foreach($cidades as $c)
<tr>
	
	<td>{{$c->nome}}</td>
	<td>{{$c->estado->nome}}-{{$c->estado->sigla}}</td>
	<td><a href="{{route('cidades.show',$c->id)}}">Exibir</a></td>
	<td><a href="{{route('cidades.edit',$c->id)}}">Editar</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

