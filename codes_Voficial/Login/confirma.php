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
            header('Location: ../Login/admin.php');

}           else{
            echo "<br><h2 align='center'>Login incorreto do administrador</h2>";
            echo "<form action='login.php' method='GET' align='center'>";
            echo "<input type='submit' value='Tentar novamente'>";
            }
    
}       else{   
        $senha2 = md5($senha);

         $sql = "select senha from usuario where email = '".$email."';";
         $result = mysqli_query($link, $sql);
            $row = $result -> fetch_assoc();

            $senhacrip = $row['senha'];

        if($senha2 == $senhacrip){
         header('Location: ../Login/cliente.php?email='.$email.'');
}else{
  echo "<br><h2 align='center'>Login incorreto</h2>";
  echo "<form action='login.php' method='GET' align='center'>";
  echo "<input type='submit' value='Tentar novamente'>";
  
}

}


$link->close();

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