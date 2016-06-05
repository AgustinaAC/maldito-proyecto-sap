<html>
<head>
<title></title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">
<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Muestra</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="me.png" width="300" height="90" vspace="30px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio formualrio" align="center">

<?php
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
     $result=mysql_query("select * from clientes"); //selecciono todos los campos de la tabla
?>
 <br>
 <br>
 <br>
<table border="1" align="center">
<tr>
<td bgcolor="grey" width="80" align="center"> Numero de Escuela </td>
<td bgcolor="grey" width="300" align="center"> Razon Social </td> 
<td bgcolor="grey" width="250" align="center"> Direccion </td>
<td bgcolor="grey"width="500" align="center"> Codigo Postal</td>
<td bgcolor="grey"width="300" align="center"> Telefono </td>
<td bgcolor="grey"width="300" align="center"> celular </td>
<td bgcolor="grey"width="300" align="center"> E-mail </td>
<td bgcolor="grey"width="300" align="center"> Observaciones </td>

</tr>

<?php
    while($ver=mysql_fetch_array($result)){ // mientra haya resultados genero un array 
        echo "<tr> <td>".$ver["nume"];
		echo"<td>". $ver["rzs"];
		echo "<td>".$ver["dom"];
		echo "<td>".$ver["cp"];
		echo "<td>".$ver["tel"];
		echo "<td>".$ver["cel"];
		echo "<td>".$ver["email"];
		echo "<td>".$ver["obs"]."</tr>".
				"<br/>";
				
    }
mysql_free_result($result); // libero la variable
}
 mysql_close ($conec);
?>
</table>



  <a href='inicio.html'><input class="button2" type="button" value="Volver a inicio"></a>


</div>
<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>

</body>
</html>
