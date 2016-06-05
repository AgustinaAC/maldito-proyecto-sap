<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
$nom=$_POST["hh"];
$nom2=$_POST["hh2"];

$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
   mysql_query("update clientes set nume='$nom2' where nume='$nom'"); //actualizar en la tabla el valor dado por una variable sobre un campo donde se de la condición de igualdad sobre un campo
}
mysql_close ($conec);

?>
<a href='inicio.html'><input class="button2" type="button" value="Volver a inicio"></a>