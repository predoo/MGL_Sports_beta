<?php

include "../Cabecalho/Cabecalho.php";
include "../Banco/banco.php";

if(isset($_GET['preferencias'])== false){

 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/cadastro.css">
<head>
</head>
<body>
 <div id="cad">
 <fieldset>
 <legend>Preferências</legend>
 <form action='preferencias.php' method='GET' align='center'>
  Descreva seu nível esportivo, preferências e estilo de alimentação: <br><textarea name="preferencias"> </textarea><br>
  
    <input type='submit' value='Pronto'>
    </form>
 

</fieldset>
</div>
 </body>
</html>

<?php 
}
else{
  $preferencias = $_GET['preferencias'];
  
  if($preferencias != ""){

  $sql = "INSERT INTO usuario(preferencias) VALUES
  ('".$preferencias."')";

  $result = mysqli_query($link, $sql);

  if($result){
    echo "<br>";
    echo "<h3 align='center'>Dados inseridos com sucesso!</h3>";
    echo "<h3 align='center'>Você será redimensionado para a página de login.</h3>";
    sleep(10);
    header("Location: ../Login/login.php");
    echo "</form>";

  }else{
    echo "<h3 align='center'>Erro de SQL.</h3>";
  }

  }

  else{

    echo "<br>";
    echo "<h3 align='center'>Por favor, volte e preencha todos os campos.</h3>";
    echo "<form action='Cadastro.php' method='GET' align='center'>";
    echo "<br>";
    echo "<input type='submit' value='Voltar'>";
    echo "</form>";

  }

  }

  unset($id);

?>