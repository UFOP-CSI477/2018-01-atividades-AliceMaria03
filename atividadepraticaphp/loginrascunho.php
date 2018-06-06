<?php
  require_once 'assets/templates/header.php';
  require_once 'assets/php/classes/classUsers.php';
  $login = new Users();

 if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $password = $_POST['password'];

  $email =(string) $login->indexEmail($name)->email;
  $pass =(string) $login->indexEmail($name)->password;

  if($name == "" || $senha == ""){
    echo "<script>alert('Preencha todos os campos');</script>";
  }else if($email == $name && $senha == $pass){
    $tipo = $login->indexEmail($name)->type;
    if($tipo == 1){
      header('location:  administrador.php');
    }else if($tipo == 2){
      header('location: ');
    }else if($tipo == 3){
      header('location: pacientes.php');
    }else{
      header('location: index.php');
    }
  }else{
    echo "<script>alert('Login ou senha incorretos');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- Start login modal window -->
      <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
        <div class="modal-dialog">
          <!-- Start login section -->
          <div id="login-content" class="modal-content">
            <div class="modal-header">
              <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
            </div>
            <div class="modal-body">
              <form  id="users" name="users" method="post" action="inicio.php">
                <div class="form-group">
                  <input type="text" id="email" name="email" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" id="password" name="senha" placeholder="Password" class="form-control">
                </div>
                <div class="loginbox">
                  <label><input type="checkbox"><span>Remember me</span></label>
                  <button class="btn signin-btn" type="submit" name="submit">SIGN IN</button>
                </div>
              </form>

            </div>
            <div class="modal-footer footer-box">
              <a href="#">Forgot password ?</a>
              <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>
            </div>
          </div>

        </div>
      </div>
      <!-- End login modal window -->
    </body>
</html>