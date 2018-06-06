<?php
require_once 'assets/php/classes/classUsers.php';

$user = new Users();

if(isset($_POST['insert'])){
	$user->setName($_POST['name']);
	$user->setEmail($_POST['email']);
	$user->setPassword($_POST['password']);
	$user->setType('3');
	/*$proced->setCreated_at($_POST['created_at']);
	$proced->setUpdate_at($_POST['update_at']);*/
	
	if($user->insert() == 1){
		$result = "Paciente inserido com sucesso!";
	}else{
		$error = "Erro ao inserir";
	}
}

if(isset($_POST['cancel'])){
	header("Location: cadastrarPacientes.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<title>Santa Efigênia</title>
</head>
<body>
	<h1>Cadastrar Pacientes</h1>
	<?php
	if (isset($result)) {
		?>
		<div class="alert alert-success">
			<?php echo $result; ?>
		</div>
		<?php
	}else if(isset($error)){
		?>
		<div class="alert alert-danger">
			<?php echo $error; ?>
		</div>
		<?php
	}
	?>
	<div class="col-md-6">
		<form action="cadastrarPacientes.php" method="post">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="name" class="form-control">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
				<label>Senha</label>
				<input type="password" name="password" class="form-control">
				

			</div>
			<div class="form-group">
				<button type="submit" name="cancel" class="btn btn-danger">Cancelar</button>
				<button type="submit" name="insert" class="btn btn-success">Cadastrar</button>
			</div>			
		</form>
	</div>
</body>
</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
