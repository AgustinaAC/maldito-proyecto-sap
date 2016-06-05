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
      echo '<a href="index.php">Es necesario Loguearse</a>'; 
	  
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
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Inicio</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">


</div>
<div class="medio" align="center">
<br>
<br>

<a href='mclientes/inicio2.php'><img src="clientes.png" width="150" height="150" hspace="30px"></a>  

<a href='mproveedores/inicio3.php'><img src="proveedores.png" width="150" height="150" hspace="30px"></a> 

<a href='mprod/inicio4.php'><img src="productos.png" width="150" height="150" hspace="30px"></a> 


<a href='mpedido/inicio5.php'><img src="pedido.png" width="150" height="150" hspace="30px"></a> 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<a href='logout.php'><img src="button.png" ></a> 


</div>
<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>


</body>
</html>