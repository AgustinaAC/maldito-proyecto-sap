


<link rel="stylesheet" type="text/css" href="estilo.css">
<?php


$det=$_POST["detalle"];
$can=$_POST["cantidad"];
$precio=$_POST["precio"];
$porc=$_POST["porc"];

$pgana=($precio*$porc)/100;
$preciov=$precio+$pgana;
  
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
	
	
    $in="insert into productos(detalle, cantp, precioc, preciov, gana)"."values('$det','$can','$precio','$preciov','$porc')";
	
    $result=mysql_query($in); // puede usarse sin el uso de la variable
	
    echo "Los datos fueron ingresados";
}
 mysql_close ($conec);

?>
<a href='inicio4.php'><input class="button2" type="button" value="Volver a Productos"></a>
