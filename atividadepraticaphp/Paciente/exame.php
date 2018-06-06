<?php
require_once '../assets/php/classes/classTests.php';
$teste= new Tests();
if(isset($_POST['insert'])){
  $teste->setUser_id($_POST['user_id']);
  $teste->setProcedure_id($_POST['procedure_id']);
  $teste->setDate($_POST['date']);
  
  if($teste->insert() == 1){
    $result = "Exame inserido com sucesso!";
  }else{
    $error = "Erro ao inserir";
  }
}

if(isset($_POST['cancel'])){
  header("Location: exame.php");
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    <title>Exame</title>
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
        <h1 align="center">Exames</h1>
      </div>
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">

        
      </div>
    </div> <!-- /#top -->


    <hr />
<div class="col-md-6">
    <form action="paciente.php" method="post">
      <div class="form-group">
        <label>Usuário</label>
        <input type="number" name="user_id" class="form-control">
        <label>Procedimento</label>
        <input type="number" name="procedure_id" class="form-control">
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
