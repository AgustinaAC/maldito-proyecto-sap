<link rel="stylesheet" type="text/css" href="estilo.css">
<table border="1" align="center">
<tr>
<td bgcolor="grey"> Nombre </td>
<td bgcolor="grey"> Domicilio </td> 
<td bgcolor="grey"> Localida </td>
<td bgcolor="grey"> Cantidad </td>
<td bgcolor="grey"> descripcion </td>
<td bgcolor="grey"> Precio</td>
<td bgcolor="grey"> Total </td>
</tr>
<?php
   $nom=$_POST["hh"];
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
   mysql_select_db("pro");
    $result=mysql_query("select * from carga where dat1 like '$nom'"); //realiza una búsqueda de todos los campos de la tabla donde el nombre del campo coincida  con la variable    // * se puede remplazar por el nombre de los campos a mostrar
    echo "Los datos fueron buscados<br>";
	 
	 while($ver=mysql_fetch_array($result)){ // mientra haya resultados genero un array 
        echo "<tr> <td>".$ver["dat1"];
		echo"<td>". $ver["dat2"];
		echo "<td>".$ver["dat3"];
		echo "<td>".$ver["dat4"];
		echo "<td>".$ver["dat5"];
		echo "<td>".$ver["dat6"];
		echo "<td>".$ver["dat7"]."</tr>".
				"<br/>";
				
    }
	
    mysql_free_result($result); // libera la variable
}
mysql_close ($conec);

?>
<a href='inicio.html'><input class="button2" type="button" value="Volver a inicio"</a>