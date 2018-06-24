<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema Acadêmico</title>
	<link rel="stylesheet" href="{{ asset('./css/app.css')}}">
</head>
<body>
	<!-- Flash: mensagem -->
	@if(Session::has('mensagem'))
	<h2>{{Session::get('mensagem')}}</h2>
	@endif
	<!-- Links -->
<a href="/estados">Estados</a>
<a href="/cidades">Cidades</a>
<a href="/alunos">Alunos</a>

<!-- Conteúdo -->
@yield('conteudo')
</body>
</html>