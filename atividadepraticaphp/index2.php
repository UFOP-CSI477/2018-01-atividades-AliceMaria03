<?php
  session_start();
  
 ?>

<!DOCTYPE html>
<html lang="pt-br" class="classLogin">
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
      <img id="imagemlogin" class="imagemlogin" src="assets/images/gratidao.png" />
      <p id="imagemlogin" class="imagemlogin"></p>

      <form class="form-signin" action="/assets/php/Login.php" method="post">
        
        <span id="reauth-email" class="reauth-email"></span>
        
        <input type="email" class="form-control" name="email" placeholder="E-mail" required autofocus>
        
        <input type="password" class="form-control" name="password" placeholder="Senha" required>
        
        <div id="remember" class="checkbox">
          <label>
              <input type="checkbox" value="">Lembrar-me 

          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block btn-signin" id="btnentrar" type="submit">Entrar</button>

      </form><!-- /form -->

       
  </div><!-- /card-container -->
</div><!-- /container -->

<div class = "footer">
<?php
  require_once 'assets/templates/footer.php';
?>
</div>


</body>
</html>