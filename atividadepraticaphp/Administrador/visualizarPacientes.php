<?php 

require_once '../assets/php/classes/classUsers.php';



$user = new Users();


if(isset($_GET['edit'])){

$user->setId($_POST['id']);
$user->setName($_POST['name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->setType($_POST['type']);
if($user->edit() == 1){
    $result = "Paciente editado com sucesso!";
  }else{
    $error = "Erro ao editar";
  }
}
if(isset($_POST['delete'])){
  $user->setId($_POST['id']);
  if($user->delete() == 1){
    $result = "Paciente deletado com sucesso!";
  }else{
    $error = "Erro ao deletar";
  }
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
  <title>Visualizar Pacientes</title>
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
        <h1 align="center">Pacientes</h1>
      </div>
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">

        
      </div>
    </div> <!-- /#top -->


    <hr />
    <div id="list" class="row">

      <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th>Usuário</th>
              <th>Nome</th>
              <th>Email</th>

              
            </tr>
            <?php 
            $stmt = $user->index();
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
              ?>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->name ?></td>
                 <td><?php echo $row->email ?></td>
                <?php //} ?>
                <?php
                //$stmt=$tests->select2($user_id,$id);
                //while($row=$stmt->fetch(PDO::FETCH_OBJ)){
                  ?>
                
                
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      </div> <!-- /#list -->


    </div> <!-- /#main -->

    <?php 
    $stmt = $user->index();
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
      ?>
      <form action="visualizarPacientes.php" method="post">
        <!-- Modal -->
        <div class="modal fade" id="delete-modal<?php echo $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Paciente</h4>
              </div>
              <div class="modal-body">
                Deseja realmente excluir o paciente <?php echo $row->id ?>?
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                <button type="submit" name="delete" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
              </div>
            </div>
          </div>
        </div>
      </form>

      <?php } ?>
      </div>
</body>
</html>


      <script type="application/javascript">
        var active = document.getElementById("pacientes");
        active.classList.add("active");
      </script>


      <script type="application/javascript">
        var active = document.getElementById("pacientesvisualizar");
        active.classList.add("active");
      </script>
      <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>




      