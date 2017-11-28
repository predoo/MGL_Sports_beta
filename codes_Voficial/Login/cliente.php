<?php
include "../Cabecalho/Cabecalho.php";
include "../banco.php";
$sql = "select resposta from usuario where idUsuario = '".$_GET['email']."'";
$result = mysqli_query($link, $sql);
  $row = $result -> fetch_assoc();
   $resposta = $row['resposta'];
   
  
echo "<!DOCTYPE html>
 <html>
 <link rel='stylesheet' type='text/css' href='../CSS/index.css'>
 <head>
  <title></title>
 </head>
 <body>
 <div id='a'>
  <h1>Avaliação do preparador físico: </h1>".$resposta."
</div>

</body>
</html>";

?>