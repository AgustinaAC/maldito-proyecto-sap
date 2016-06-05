<?php
include("conexion.php");
?>
<?php include 'cnx.php';   ?>
<html>
<head>
<title></title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="estilo.css">
 
</head>
<body background="f.png" style="background-attachment: fixed">

<div class="arriba">
<h1 align="center"><i><u><font color="white" face="Lubalin Graph">Codigos Postales</font> </u></i></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="300" height="90" vspace="30px">

<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio" align="center">
 <form action="apost.php" method="post">
<br>
<br>
<br>
     <table border="2">
	 <tr>
	<td><font face="tahoma" size="5">Codigo Postal</font></td> 
	<td colspan="5"><input  type="text" name="c" size="45"/></td>
	</tr>
	<tr>
	<td><font face="tahoma" size="5">Localidad</font></td>
	<td colspan="5"><input type="text" name="d" size="45"/></td>
	</tr>
	
	 
	
	
</table>
<input class="button" type="submit" value="Agregar Codigo Postal"/>
</form>



<a href='inicio2.php'><input class="button" type="button" value="Atras"></a>
<a href='../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>
</div>


<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>


</body>
</html>