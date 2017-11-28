<?php 

$servername = "localhost";
$username = "root";
$passsword = "";
$database = "mgl_sports";

$link = mysqli_connect($servername, $username, $passsword, $database);

if(mysqli_connect_error()){
	printf("<br>Não foi possível conectar!");
	printf("<br>Erro: %s\n", mysqli_connect_error());
	exit();
}

?>