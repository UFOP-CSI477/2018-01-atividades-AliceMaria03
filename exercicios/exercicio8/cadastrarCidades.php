<?php
require_once 'assets/php/classes/classCidade.php';
require_once 'assets/php/classes/classEstado.php';
$cidade = new Cidades();
$estado = new Estados();
if(isset($_POST['insert'])){
	$cidade->setNome($_POST['nome']);
	$cidade->setEstado_id($_POST['estado_id']);
		
	if($cidade->insert() == 1){
		$result = "Cidade inserido com sucesso!";
	}else{
		$error = "Erro ao inserir";
	}
}
if(isset($_POST['cancel'])){
	header("Location: cadastrarCidades.php");
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
			<h1>CADASTRAR CIDADES</h1>
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
				<form action="cadastrarCidades.php" method="post">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
						<label>ID do Estado</label>
						<input type="number" name="estado_id" class="form-control">
						
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