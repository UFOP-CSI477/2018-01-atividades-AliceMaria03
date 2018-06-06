<?php
require_once 'assets/php/classes/classUsers.php';
$users= new Users();
if(isset($_POST['insert'])){
  $users->setName($_POST['name']);
  $users->setEmail($_POST['email']);
  $users->setPassword($_POST['password']);
  $users->settype($_POST['type']);
  if($users->insert() == 1){
    $result = "Administrador inserido com sucesso!";
  }else{
    $error = "Erro ao inserir";
  }
}

if(isset($_POST['cancel'])){
  header("Location: administrador.php");
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
    <title>Área do Administrador</title>
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
        <h1 align="center">Administrador</h1>
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
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        <label>Senha</label>
        <input type="text" name="password" class="form-control">
        <input type="hidden" name="type" value="3">
        

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
