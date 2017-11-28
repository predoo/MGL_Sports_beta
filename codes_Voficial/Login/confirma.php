<?php 
include '../banco.php';

$email = $_GET["email"];
$senha = $_GET["senha"];

if(isset($_GET['opcoes'])){
    $sql = "select senha from preparador_fisico where email = '".$email."';";
     $result = mysqli_query($link, $sql);
$row = $result -> fetch_assoc();

$senhab = $row['senha'];
if($senha == $senhab){
         header('Location: ../Home/Home.php');

}else{
    echo "<br><h2 align='center'>Login incorreto do administrador</h2>";
  echo "<form action='login.php' method='GET' align='center'>";
  echo "<input type='submit' value='Tentar novamente'>";
}
    
}else{   
    $senha2 = md5($senha);

    $sql = "select senha from usuario where email = '".$email."';";
    $result = mysqli_query($link, $sql);
$row = $result -> fetch_assoc();

$senhacrip = $row['senha'];

if($senha2 == $senhacrip){
 if(isset($_GET['opcoes'])){
     header('Location: ../Home/Home.php');
}
else{
     header('Location: ../Valores/valores.php');
}

}else{
  echo "<br><h2 align='center'>Login incorreto</h2>";
  echo "<form action='login.php' method='GET' align='center'>";
  echo "<input type='submit' value='Tentar novamente'>";
  
}
}



$link->close();

?>