<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema Análises Laboratoriais</title>
	<link rel="stylesheet" href="{{ asset('./css/app.css')}}">
</head>
<body>
	<!-- Flash: mensagem -->
	@if(Session::has('mensagem'))
	<h2>{{Session::get('mensagem')}}</h2>
	@endif
	<!-- Links -->
<a href="/procedures">Procedimentos</a>
<a href="/users">Users</a>
<a href="/tests">Tests</a>

<!-- Conteúdo -->
@yield('conteudo')
</body>
</html>