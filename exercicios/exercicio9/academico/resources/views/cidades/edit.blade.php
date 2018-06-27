@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar cidade:{{$cidade->id}}</h1>
<form method="post" action="{{route('cidades.update',['cidade' => $cidade->id])}}">
	@csrf
	@method('PATCH')
	<p>Nome:<input type="text" name="nome" value="{{$cidade->nome}}"></p>
	Estado:
	<select name="estado_id">

		<option value="">Selecione:</option>
		<!-- Dados do Estado -->

		@foreach($estados as $e)
			<option value="{{$e->id}}"
				@if($e->id==$cidade->estado_id)
					selected
				@endif
				>{{$e->nome}}-{{$e->sigla}}</option>
		@endforeach
	</select>
	<!-- <p>ID do Estado:<input type="text" name="estado_id" value="{{$cidade->estado_id}}"></p> -->
	<p>Atualizar<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
