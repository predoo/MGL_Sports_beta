<?php
include "../Cabecalho/Cabecalho.php";
include "../banco.php";



$sql = "select nome from usuario;";
$result = mysqli_query($link, $sql);
 


if($result){
  

echo "<!DOCTYPE html>
 <html>
 <link rel='stylesheet' type='text/css' href='../CSS/index.css'>
 <head>
  <title></title>
 </head>
 <body>
<h3> Selecione o cliente a ser avaliado: </h3>";

echo "<form method='get' action='servico.php'>
<select name = 'nome'>";
    echo  "<option value=' '></option>";


while($row = $result->fetch_array(MYSQLI_NUM))
{
 echo  "<script> console.log(".$i.")</script>";
      echo  "<script> console.log(".$row[0].")</script>";

      echo  "<script> console.log(".$row[0].")</script>";

    echo  "<option value='".$row[0]."'>".$row[0]."</option>";
}
     

echo"
</select>
<br /><br />
<input type='submit' value='Selecionar' />
</form>

</body>
</html>";}

else{
    echo "Erro no SQL!";
}

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