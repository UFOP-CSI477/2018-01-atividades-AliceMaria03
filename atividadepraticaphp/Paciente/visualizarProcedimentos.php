<?php 
require_once '../assets/php/classes/classProcedures.php';
if(isset($_GET['id'])){
$proced= new Procedures();
$proced->setId($_GET['id']);
$proced->setName($_GET['name']);
$proced->setPrice($_GET['price']);
$procedimento= $proced->view();

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
  <title>Visualizar Procediemntos</title>
</head>
<body>
<div class="content-wrapper">
    <div id="main" class="container-fluid">
          <!-- general form elements disabled -->
          <div class="box box-warning" style="border-color:#222D32; margin-top: 20px;">
            <div class="box-header with-border">
              <h3 class="box-title">Procedimentos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $proced->name; ?>" disabled>
                </div> 
                <div class="form-group">
                  <label>Preço</label>
                  <input type="number" name="price" class="form-control" value="<?php echo $proced->price; ?>" disabled>
                </div> 
            </div>
            <div class="box-footer">
            <a href="visualizarProcedimentos.php">
            <button type="submit" class="btn btn-danger">Voltar</button>
          </a>
          </div>
        </div>
    </div>
   </div>
</body>
</html>

   <script type="application/javascript">
    var active = document.getElementById("procedimentos");
    active.classList.add("active");
</script>


<script type="application/javascript">
    var active = document.getElementById("procedimentosvisualizar");
    active.classList.add("active");
</script>
<?php
    require_once '../assets/templates/footer.php';
?>