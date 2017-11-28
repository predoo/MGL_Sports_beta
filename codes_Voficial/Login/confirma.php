<?php 
include '../Banco/banco.php';

$email = $_GET["email"];
$senha = $_GET["senha"];
$senha2 = md5($senha);

$sql = "select senha from usuario where email = '".$email."';";

$result = mysqli_query($link, $sql);
$row = $result -> fetch_assoc();

$senhacrip = $row['senha'];

if($senha2 == $senhacrip){
  header('Location: home.php'); //pag do usuário
}else{
  echo "<br><h2 align='center'>Login incorreto</h2>";
  echo "<form action='login.php' method='GET' align='center'>";
  echo "<input type='submit' value='Tentar novamente'>";
  
}

$link->close();

?>