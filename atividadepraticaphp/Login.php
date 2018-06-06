<?php
require_once 'assets/php/classes/classUsers.php';

$classUsers = new Users();


if(isset($_POST['login'])){

  $user = $_POST['email'];
  $senha = $_POST['password'];

  $email =(string) $classUsers->indexEmail($user)->email;
  $password =(string) $classUsers->indexEmail($user)->password;
  ECHO $email;
  echo $password;

  if($user == "" || $senha == ""){
    echo "<script>alert('Preencha todos os campos');</script>";
  }else if($email == $user && $senha == $password){
  	
  	$idu=     $tipo = $classUsers->indexEmail($user)->id;
    $tipo = $classUsers->indexEmail($user)->type;
    $_SESSION['type'] = $tipo;
    $_SESSION['id']= $idu; 
    if($tipo == 1){
      header('location:  ./Administrador/index-admin.php');
    }else if($tipo == 2){
      header('location: ./Operador/index-operador.php');
    }else if($tipo == 3){

      header('location: ./Paciente/index-paciente.php');
    }else{
      header('location: index2.php');
    }
  }else{
    echo "<script>alert('Login ou senha incorretos');</script>";
  }
}





require_once 'assets/php/classes/classUsers.php';

$classUsers= new Users();

if(isset($_POST['insert'])){
  $classUsers->setName($_POST['name']);
  $classUsers->setEmail($_POST['email']);
  $classUsers->setPassword($_POST['password']);
  $classUsers->setType($_POST['type']);

  if($classUsers->insert()==1){
    $result = "Usuario cadastrado";
  }else{
    $error="Erro ao inserir";
  }

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/sunflower.png"/> 
  <title>Santa Efigênia</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="login">
  <div class="container">
    <div class="card card-container">
      <img id="imagemlogin" class="imagemlogin" src="assets/images/sunflower.png" />
      <p id="imagemlogin" class="imagemlogin"></p>

      <form class="form-signin" action="Login.php" method="post">
        
        <span id="reauth-email" class="reauth-email"></span>
        
        <input type="email" class="form-control" name="email" placeholder="E-mail" required autofocus>
        
        <input type="password" class="form-control" name="password" placeholder="Senha" required>
        
        <div id="remember" class="checkbox">
          <label>
            <input type="checkbox" value="">Lembrar-me 

          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block btn-signin" id="btnentrar" name="login" type="submit">Entrar</button>
        <a href="#0" data-toggle="modal" data-target="#modalcadastrar"><small>
        Não possui cadastro? Clique aqui</small>
      </a>


    </form><!-- /form -->

    
  </div><!-- /card-container -->
</div><!-- /container -->

<!-- Modal -->
<div class="modal fade" id="modalcadastrar" tabindex="-1" role="dialog"  data-backdrop="focus" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Dados Cadastrais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Login.php" method="post">
    <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
      <label for="amplitude">Nome</label>
      <input type="text" class="form-control" name="name"  placeholder="">
    </div>
    <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
      <label for="tempo">E-mail</label>
      <input type="text" class="form-control" name="email" placeholder="" >
    </div>
    <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
      <label for="tempo">Senha</label>
      <input class="form-control" type="password"  name="password"  required>
    </div>
    <input type=hidden name="type" value="3">


  
      </div>
      <div class="modal-footer">
           <button type="submit" class="btn btn-primary btn-block botao" name="insert"  >Cadastrar</button>
      </div>
        </form>

    </div>
  </div>
</div>

</body>


</html>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.3.2.1.min.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="assets/js/popper.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>