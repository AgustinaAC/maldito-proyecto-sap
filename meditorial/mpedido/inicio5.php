<?php
session_start(); 

if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            header("location:index.php"); 
        } 
    } 
else 
{   
       // Usuario que no se ha logueado 
      echo '<a href="../index.php">Es necesario Loguearse</a>'; 
	  
       exit(); 
}  
}
?>
<html>
<head>
<title>Base de datos</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">

<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Pedidos</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio" align="center">

<br>
<p><a href='pedidor.php'><input class="button" type="button" value="Tomar Pedido"></a></p>
<br>
<p><a href='pedidostotales.php'><input class="button" type="button" value="Mostrar todos los Pedidos"></a></p>
<br>

<p><a href='../inicio.php'><input class="button" type="button" value="Volver al Inicio"></a></p>
<br>


</div>
<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>



</body>
</html>