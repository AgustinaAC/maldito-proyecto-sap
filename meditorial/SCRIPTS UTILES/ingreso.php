<html>
<head>
<title>Base de datos</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body background="f.png" style="background-attachment: fixed">
<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Ingreso</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="me.png" width="300" height="90" vspace="30px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>


<div class="medio" align="center">
<font face="Lubalin Graph" size="5">

<?php
include ('funciones.php');
//uso de la funcion verificar_usuario()
if (verificar_usuario()){
	//si el usuario es verificado puede acceder al contenido permitido a el

	print " <h1> Ha ingresado correctamente</h1> <br> Buen dia  $_SESSION[usuario]<br/> <br> Para proseguir <a href='inicio.html'>clic aqui</a><br/>";
	
} else {
	//si el usuario no es verificado volvera al formulario de ingreso
	header('Location:index.php');
}
?>	

</font>	
</div>


<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>

</body>
</html>