<html>
<head>
<title></title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">
<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Eliminar Producto</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio"align="center">
<?php
$conec=mysql_connect("localhost","root",""); //conexi�n con el servidor
if(!$conec){
    echo "ok C";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
     $result=mysql_query("select * from productos"); //selecciono todos los campos de la tabla
?>
 <br>
 <br>
<font face="Lubalin Graph" size="5">  Colocar el Codigo de Producto: </font>  <input type='text' name="hh">
  
 <br>
<table border="1" align="center">
<tr>
<td bgcolor="grey" width="80" align="center"> <font face="Lubalin Graph" size="4">  Codigo del Producto </font></td>
<td bgcolor="grey" width="200" align="center"> <font face="Lubalin Graph" size="4">  Producto </font> </td> 
<td bgcolor="grey" width="80" align="center"> <font face="Lubalin Graph" size="4">  Cantidad </font> </td>
<td bgcolor="grey" width="80" align="center"> <font face="Lubalin Graph" size="4">  Precio </font></td>
</tr>

<?php
    while($ver=mysql_fetch_array($result)){ // mientra haya resultados genero un array 
        echo "<tr> <td>".$ver["codp"];
		echo"<td>". $ver["detalle"];
		echo "<td>".$ver["cantp"];
		echo "<td>".$ver["precioc"]."</tr>".
				"<br/>";
				
    }
mysql_free_result($result); // libero la variable
}
 mysql_close ($conec);
?>
</table>

<form action='borrarpro.php' method="POST">
<br>
<br>

  <input class="button" type='submit' value='BORRAR'>
</form>

<br>
<br>

<a href='inicio4.html'><input class="button" type="button" value="Volver a Productos"></a>
</div>

<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>

</body>
</html>


