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
<?php
//Conexión a la base de datos
$servidor = "localhost"; //Nombre del servidor
$usuario = "root"; //Nombre de usuario en tu servidor
$password = ""; //Contraseña del usuario
$base = "meditorial"; //Nombre de la BD
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 

$buscar = mysqli_query($conexion, "SELECT * FROM detallespedidos");
if (mysqli_num_rows($buscar) > 0) {
?>
<html>
<head>
<title>Pedidos de Clientes</title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="estilo.css">	
	
</head>
<body background="f.png" style="background-attachment: fixed">

<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Total de Pedidos</font> </u></h1>
</div> 
<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">

<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>
<div class="medio" align="center">
<table border = "1" width = "50%" align="center">
<tr>
<th><font face="Lubalin Graph"size="4"> Numero de Pedido</font></th>
<th><font face="Lubalin Graph"size="4"> Fecha del Pedido  </font></th>
<th> <font face="Lubalin Graph"size="4">  Numero de Escuela </font></th>
<th> <font face="Lubalin Graph"size="4">  Importe </font></th>
<th> <font face="Lubalin Graph"size="4">  Entrega </font></th>
<th> <font face="Lubalin Graph"size="4">  Pago </font></th>
</tr>
<?php
while ($datos = mysqli_fetch_array($buscar)){
?>
<tr>
<th> <?=$datos["nump"]?> </th>
<th> <?=$datos["fechapedido"]?> </th>
<th> <?=$datos["nume"]?> </th>
<th><input type="text" style="text-align:right" disabled="disabled" value="<?=$datos["importe"]?>"></input> </th>
<th> <?=$datos["entrega"]?> </th>
<th> <?=$datos["pago"]?> </th>
</tr>
<?php
}
mysqli_free_result($buscar);
?>
</table>
<?php
} else {
echo "No se encontraron datos en la base de datos";
}
?>

<br><br>
<a href='inicio5.php'><input class="button" type="button" value="Atras"></a>
<a href='../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>

</div>



<div class="pie">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>



</body>
</html>