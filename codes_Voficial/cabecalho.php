<?php
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/cabecalho.css">

<head>
	<title></title>
</head>
<body>
<div id="cab">
<img style="position: absolute;" id="logo" src="../IMAGENS/logo.png">
</div>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
    margin-left: -0.4%;
    margin-right: -0.6%;
}

li {
    float: left;
}

li a {
    display: block;
    color: lightgrey;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: green;
}

.active {
    background-color: black;
}
</style>
</head>
<body>

<ul id="menu">
  <li><a href=index.php>Inicio</a></li>
  <li><a href=valores.php>Valores</a></li>
  <li><a href="contato.php">Contato</a></li>
  <li><a href="sobre.php">Sobre</a></li>
  <li><a href="cadastro.php">Cadastro</a></li>
  <li style="float:right"><a href="#login">Login</a></li>
</ul>

</body>
</html>