<?php 
include "../Cabecalho/Cabecalho.php";
include "../banco.php";

if(isset($_GET['nome'])== false){

 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/cadastro.css">
<head>
	<title></title>
</head>
<body>
 <div id="cad">
 <fieldset>
 <legend>Dados para cadastro</legend>
 <form action='Cadastro.php' method='GET' align='center'>
  Email: <br><input type='Text' name='email'><br>
  Nome: <br><input type='Text' name='nome'><br>
  Senha: <br><input type='Password' name='senha'><br><br>
    <input type='submit' value='Pronto'>
    </form>
 

</fieldset>
</div>
 </body>
</html>

<?php 
}
else{
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  $senha = $_GET['senha'];
  $senhacrip = md5($senha);
  
  if($nome != "" &&  $email != "" && $senha != ""){

  $sql = "INSERT INTO usuario(idUsuario, nome, email, preferencias, senha) VALUES
  ('".$email."', '".$nome."','".$email."', ' ','".$senhacrip."')";

  $result = mysqli_query($link, $sql);

  if($result){
    echo "<br>";
    echo "<h3 align='center'>Dados inseridos com sucesso!</h3>";
    echo "<form action='Preferencias.php' method='GET' align='center'>";//pg do usuário
    echo "<br>";
    echo "<br><input type='Text' name='email' value = '".$email."'><br>";
    echo "<input type='submit' value='Ok'>";
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