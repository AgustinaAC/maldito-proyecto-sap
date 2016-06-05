<link rel="stylesheet" type="text/css" href="estilo.css">
<?php

$nom2=$_POST["hh"];
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "<h1>La conexión no se realizó con éxito</h1>";
    exit();
}else{
   mysql_select_db("meditorial"); //conecta con la base de datos
	$result=mysql_query("select * from proveedores where codpr like '$nom2'");
	
	if(mysql_fetch_array($result)){
		mysql_query("delete from proveedores where codpr='$nom2' "); // borra el registro completo que coincida con la condición
		echo "<h1>el registro ha sido borrado</h1>";
	}else{
		echo "<h1>Los datos no se encontraron</h1>";
	}
   }
mysql_close ($conec);
?>
<a href="inicio.html"><input class="button2" type="button" value="volver"/>
