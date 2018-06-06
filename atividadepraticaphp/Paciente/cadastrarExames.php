<?php

require_once '..\assets\php\classes\classTests.php';
require_once '..\assets\php\classes\classProcedures.php';
require_once '..\assets\php\classes\classUsers.php';
$Users= new Users();
$Procedures= new Procedures();
$Tests= new Tests();

session_start();
/*$usuario=$_SESSION['id'];*/
if(isset($_POST['insert'])){
$Tests->setUser_id($user_id);
  $Tests->setProcedure_id($_POST['procedure_id']);
  $Tests->setDate($_POST['date']);
  
  if($Tests->insert() == 1){
    $result = "Teste inserido com sucesso!";
  }else{
    $error = "Erro ao inserir";
  }
}

if(isset($_POST['cancel'])){
  header("Location: cadastrarExames.php");
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  
	<title>Cadastrar Exames</title>
</head>
<body>
  <div class="content-wrapper">
  <div id="main" class="container-fluid">
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
    <div id="top" class="row">
      <div class="col-md-12">
        <h1 align="center">Cadastrar Exames</h1>
      </div>
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">

        
      </div>
    </div> <!-- /#top -->


    <hr />
<form action="cadastrarExames.php" method="post">
      <div class="form-group">
        
        <label>Procedimento</label>
        <select name="procedure_id" >

        	
        	<?php
        	$stmt= $Procedures->index();
        	while($row=$stmt->fetch(PDO::FETCH_OBJ)){
        	?>
        		<option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
        	<?php
        }
        ?>
        </select>
       <br>
        <label>Data</label>
        <input type="date" name="date" class="form-control">
        

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