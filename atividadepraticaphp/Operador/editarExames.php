
<?php
require_once '../assets/php/classes/classTests.php';
require_once '../assets/php/classes/classUsers.php';
require_once '../assets/php/classes/classProcedures.php';
$tests= new Tests();

if(isset($_POST['edit'])){
$tests->setId($_POST['id']);
$tests->setUser_id($_POST['user_id']);
$tests->setProcedure_id($_POST['procedure_id']);
$tests->setDate($_POST['date']);
if($tests->edit() == 1){
    $result = "Exame editado com sucesso!";
  }else{
    $error = "Erro ao editar";
  }
}

if(isset($_POST['delete'])){
  $tests->setId($_POST['id']);
  if($tests->delete() == 1){
    $result = "Exame deletado com sucesso!";
  }else{
    $error = "Erro ao deletar";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Santa Efigênia</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Editar Exame</h1>
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

			<table>
				<thead>
					<tr>
						
						<th>Usuário</th>
						<th>Procedimento</th>
						<th>Data</th>
						
					</tr>

					<?php 
					$stmt = $tests->index();
					while($row = $stmt->fetch(PDO::FETCH_OBJ)){
						?>
						<tbody>
							<tr>
								<td><?php echo $row->user_id ?></td>
               					<td><?php echo $row->procedure_id ?></td>
               					<td><?php echo $row->date ?></td>
                
								
								
								<td>
									<button type="button" data-toggle="modal" data-target="#editar<?php echo $row->id ?>" class="btn btn-warning btn-sm">Editar</button>
									<button type="button" data-toggle="modal" data-target="#deletar<?php echo $row->id ?>" class="btn btn-danger btn-sm">Excluir</button>
								</td>
							</tr>
						</tbody>
						<?php } ?>
					</thead>
				</table>

				<?php 
				$stmt = $tests->index();
				while($row = $stmt->fetch(PDO::FETCH_OBJ)){
					?>

					<!-- MODAL EDITAR -->
					<div class="modal fade" id="editar<?php echo $row->id ?>" role="dialog">
						<div class="modal-dialog" modal-lg role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
									<h3>Editar Exames</h3>
								</div>
								<div class="modal-body">
                  </div>
                
									<form action="editarExames.php" method="post">
										<div class="form-group">
											<label>Usuário</label>
											<input type="number" name="user_id" class="form-control" value="<?php echo $row->user_id ?>" required>
											
											<label>Procedimento</label>
											<input type="number" name="procedure_id" value="<?php echo $row->procedure_id ?>" class= "form-control"  required>
											<label>Data</label>
											<input type="number" name="date" value="<?php echo $row->date ?>" class= "form-control"  required>
											
											
										</div>
                      <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                      <button type="submit" name="edit" class="btn btn-success">Salvar</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>    
									</form>
							</div>
							</div>
						</div>
					</div>
        </div>
      </div>
    </div>
          

										
									
								

					<!-- MODAL DELETAR -->
					<div class="modal fade" id="deletar<?php echo $row->id ?>" role="dialog">
						<div class="modal-dialog" modal-lg role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
									<h3>Deletar exame</h3>	
								</div>
								<div class="modal-body">
									<h5> Deseja deletar o exame <?php echo $row->id ?>? </h5>
									<form action="editarExames.php" method="post">
										<input type="hidden" name="id" value="<?php echo $row->id; ?>">
										<button type="submit" class="btn btn-success" name="delete">Sim</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</body>
		</html>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		

