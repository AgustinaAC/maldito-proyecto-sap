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
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Productos</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">


</div>
<div class="medio" align="center">
<ul>
<br>
<p><a href='practica2.php'><input class="button" type="button" value="Añadir Producto Nuevo"></a></p>

<p><a href='agregastock.php'><input class="button" type="button" value="Agregar Stock"></a></p>

<p><a href='modificaprod.php'><input class="button" type="button" value="Modificar Producto"></a></p>
</ul>
<br>
<a href='../inicio.php'><input class="button" type="button" value="Volver al Inicio"></a>

</div>
<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>



</body>
</html>