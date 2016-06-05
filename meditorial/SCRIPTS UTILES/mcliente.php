<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
$nom=$_POST["hh"];
$nom2=$_POST["hh2"];
$rr=$_POST["rr"];
$rr2=$_POST["rr2"];
$tt=$_POST["tt"];
$tt2=$_POST["tt2"];
$cc=$_POST["cc"];
$cc2=$_POST["cc2"];
$ee=$_POST["ee"];
$ee2=$_POST["ee2"];
$oo=$_POST["oo"];
$oo2=$_POST["oo2"];
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
    mysql_query("update clientes set rzs='$nom2' where rzs='$nom'");
    mysql_query("update clientes set dom='$rr2' where dom='$rr'");
    mysql_query("update clientes set tel='$tt2' where tel='$tt'");
    mysql_query("update clientes set cel='$cc2' where cel='$cc'");
    mysql_query("update clientes set email='$ee2' where email='$ee'"); 
	mysql_query("update clientes set obs='$oo2' where obs='$oo'");//actualizar en la tabla el valor dado por una variable sobre un campo donde se de la condición de igualdad sobre un campo
}
mysql_close ($conec);

?>
<a href='inicio.html'><input class="button2" type="button" value="Volver a inicio"></a>