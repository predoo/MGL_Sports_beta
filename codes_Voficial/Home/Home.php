<?php 

include "../Cabecalho/Cabecalho.php";

 ?>

 
 <html>
 <link rel="stylesheet" type="text/css" href="../CSS/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>


<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="../IMAGENS/basquete.jpg" style="width:100%">
  <img class="mySlides" src="../IMAGENS/volei.jpg" style="width:100%">
  <img class="mySlides" src="../IMAGENS/natacao.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>
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



</body>
 </html>