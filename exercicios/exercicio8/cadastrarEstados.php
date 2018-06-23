<?php
require_once './assets/php/classes/classEstado.php';
$estado = new Estados();
if(isset($_POST['insert'])){
	$estado->setNome($_POST['nome']);
	$estado->setSigla($_POST['sigla']);
	
	if($estado->insert() == 1){
		$result = "Estado inserido com sucesso!";
	}else{
		$error = "Erro ao inserir";
	}
}
if(isset($_POST['cancel'])){
	header("Location: cadastrarEstados.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Acadêmico</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>CADASTRAR ESTADOS</h1>
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
				<form action="cadastrarEstados.php" method="post">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
						<label>Sigla</label>
						<input type="text" name="sigla" class="form-control">
						
					</div>
					<div class="form-group">
						<button type="submit" name="cancel" class="btn btn-danger">Cancelar</button>
						<button type="submit" name="insert" class="btn btn-success">Cadastrar</button>
					</div>			
				</form>
			</div>
		</div>
	</div>
</body>
</html>