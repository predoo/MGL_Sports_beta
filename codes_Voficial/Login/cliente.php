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
 <div id='cad'>
 <fieldset>
 <legend>Seu treino dessa semana!</legend>
  <h3>Avaliação do preparador físico: </h3>".$resposta."

</div>

</body>
</html>";

?>

<br>
<br>
<br>
<br>
<br>
<div class="rodape">
<a href="https://facebook.com" target="_blank"> <img src= "../IMAGENS/facebook.png"></a>
<a href="https://instagram.com" target="_blank"><img src= "../IMAGENS/instagram.png"></a>
<a href="https://plus.google.com" target="_blank"><img src= "../IMAGENS/google.png"></a>
<a href="https://twitter.com" target="_blank"><img src= "../IMAGENS/twitter.png"></a>
</div>