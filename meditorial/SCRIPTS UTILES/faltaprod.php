<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">
<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Eliminar Producto</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="me.png" width="300" height="90" vspace="30px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio"align="center">

<?php
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
     $result=mysql_query("select * from productos WHERE cantp<=10") //selecciono todos los campos de la tabla
?>
 <br>
 <br>
 <br>
<table border="1" align="center">
<tr>
<td bgcolor="blue"> Codigo del Producto </td>
<td bgcolor="blue"> Descripcion </td> 
<td bgcolor="blue"> Cantidad </td>
<td bgcolor="blue"> Precio </td>
<td bgcolor="blue">Cantidad de productos faltantes</td>
<td bordercolor="blue">total</td>
</tr>
<?php
    $z=0;
    while($ver=mysql_fetch_array($result)){ // mientra haya resultados genero un array 
        
		echo "<tr> <td>".$ver["codp"];
		echo"<td>".$ver["detalle"];
		echo "<td>".$ver["cantp"];
		$f=20-$ver["cantp"];
		echo "<td>".$ver["precioc"];
		$h=$f*$ver["precioc"];
		echo"<td>".$f;
		$z=$z+$h;
		echo"<td>".""."</tr>";
    }
	
	echo "<tr> <td>"."";
	echo "<td>"."";
	echo "<td>"."";
	echo "<td>"."";
	echo "<td>"."";
	echo "<td>".$z."</tr>";
mysql_free_result($result); // libero la variable
}
 mysql_close ($conec);

?>
</table>
<br>
<br>
<a href='inicio.html'><input class="button" type="button" value="Volver a inicio"></a>

</div>

<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>

</body>
</html>