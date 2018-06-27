<?php 
  

  //Configuração- Conexão
  
  $mysql = 'mysql:host=localhost;dbname=academico'; //definir string de conexao
  $dbusername= 'sistemaweb';
  $dbpassword= '123456';

  $db = new PDO($mysql, $dbusername, $dbpassword);


  var_dump($db);

  //CONTROLADOR - MODELO

  $estados= $db->query("SELECT * FROM estados ORDER BY id");

  //var_dump($alunos);

  while ($linha = $estados->fetch()) {
    //var_dump($linha);
    echo $linha["id"] . "-" . $linha["nome"];
    echo "<br>";
  }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <title>Lista de estados</title>
  <table>
  <tr>
      <th>ID</th>
      <th>Nome</th>
  </tr>
  <?php
  foreach ($estados as $linha): ?>
   
  
    <tr>
    <td><?= $linha['id']?></td>
    <td><?= $linha['nome']?></td>
    </tr> 
  <?php  endforeach ?>
  </table>
  
 </head>
 <body>
 
 </body>
 </html>