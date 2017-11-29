<?php
include "admin.php";


if(isset($_GET['resposta'])== false){


$nome = $_GET['nome'];

$sql = "select preferencias from usuario where nome = '".$nome."';";
$result = mysqli_query($link, $sql);

            $row = $result -> fetch_assoc();



  if($result){
echo "<div id='blc1'> 
 	<h2>Preferências de ".$nome.".</h2>
            <h5>".$row['preferencias']." </h5>
  </div>";


echo "<div id='blc1'> 
 	<h2>Digite aqui o treino da semana e conselhos para que ".$nome." tenha uma acessoria adequada.</h2> 

<div id='cad'>
 <fieldset>
 <legend>Atendimento</legend>
 <form action='servico.php' method='GET' align='center'>
 <br>
  <input name='nome' value = '".$nome."' novalidate></input><br>
 <textarea name='resposta'> </textarea><br>
<input type='submit' value='Pronto'>
    </form>";

  }
}else{
    $resposta = $_GET['resposta'];
    $nome = $_GET['nome'];

    echo $resposta;
    $sql = "UPDATE usuario
SET resposta = '".$resposta."'
WHERE nome = '".$nome."';";
  
  $result = mysqli_query($link, $sql);

  if($result){
    echo "<br>";
    echo "<h3 align='center'>Dados inseridos com sucesso!</h3>";
    echo "<h3 align='center'>Você será redimensionado para a página de login.</h3>";
    sleep(3);
   header("Location: admim.php");
      echo "</form>";

  }
  else{
    echo "<h3 align='center'>Erro de SQL.</h3>";
 
  }
    
}

?>
