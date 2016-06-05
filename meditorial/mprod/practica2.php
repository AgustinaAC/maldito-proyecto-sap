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
<title></title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">
<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Carga de Producto</font> </u></h1>

</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio"align="center">
<br><br>

 <form action="agreproductos.php" method="post">

     <table border="2">
	
	<tr>
	<td><font face="tahoma" size="4">Producto</font></td>
	<td colspan="10"><input type="text" name="detalle" size="45"/></td>
	</tr>
	<tr>
	<td> <font face="tahoma" size="4">Cantidad</font></td> 
	<td colspan="10"><input type="text" name="cantidad" size="45"/></td>
	 </tr>
     <tr>
	 <td> <font face="tahoma" size="4">Precio</font></td> 
	<td colspan="10"><input type="text" style="text-align:right" name="precio" size="45"/></td>
	 </tr>
	 <tr>
	 <td> <font face="tahoma" size="4">Porcentaje de ganancia del producto:</font></td> 
	<td colspan="10"><input type="text" name="porc" size="45"/></td>
	 </tr>

</table>
<br>
<input class="button" type="submit" value="ENVIAR"/>
<br>
<a href='inicio4.php'><input class="button" type="button" value="Volver a Productos"></a>

</form>

</div>

<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>

</body>
</html>