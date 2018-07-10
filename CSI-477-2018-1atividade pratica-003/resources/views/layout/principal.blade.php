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
	<!-- Usuário autenticado -->
	@if(Auth::check())
	<nav class="navbar navbar-light bg-secondary">
		<span class="text-white"> Usuario:{{Auth::user()->email}}
			@if(Auth::user()->type==1)
				Administrador 
			@elseif(Auth::user()->type==2)
				Paciente
			@else
				Usuário
			@endif
		</span>
	</nav>
	@endif
	<!-- Links -->
<a href="/procedures">Procedimentos</a>
<a href="/users">Usuários</a>
<a href="/tests">Exames</a>

<!-- Conteúdo -->
@yield('conteudo')
</body>
</html>