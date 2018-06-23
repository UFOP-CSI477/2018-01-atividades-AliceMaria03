<?php
require_once 'assets/php/classes/classAluno.php';
$aluno = new Alunos();
if(isset($_POST['insert'])){
	$aluno->setNome($_POST['nome']);
	$aluno->setRua($_POST['rua']);
	$aluno->setNumero($_POST['numero']);
	$aluno->setBairro($_POST['bairro']);
	$aluno->setCidade_id($_POST['cidade_id']);
	$aluno->setCep($_POST['cep']);
	$aluno->setMail($_POST['mail']);
	

	
	if($aluno->insert() == 1){
		$result = "Aluno inserido com sucesso!";
	}else{
		$error = "Erro ao inserir";
	}
}
if(isset($_POST['cancel'])){
	header("Location: cadastrarAlunos.php");
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
			<h1>CADASTRAR ALUNOS</h1>
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
				<form action="cadastrarAlunos.php" method="post">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
						<label>Rua</label>
						<input type="text" name="rua" class="form-control">
						<label>Numero</label>
						<input type="number" name="numero" class="form-control">
						<label>Bairro</label>
						<input type="text" name="bairro" class="form-control">
						<label>ID da cidade</label>
						<input type="number" name="cidade_id" class="form-control">
						<label>CEP</label>
						<input type="text" name="cep" class="form-control">
						<label>Email</label>
						<input type="text" name="mail" class="form-control">
						
						
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