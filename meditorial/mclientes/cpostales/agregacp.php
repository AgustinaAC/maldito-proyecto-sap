
<?php
  $cod=$_POST["codigos"];
  $desc=$_POST["descripcion"];
  
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
	
	
    $in="insert into codigospostales( cp, desc)"."values('$cod','$desc')";
	
    $result=mysql_query($in); // puede usarse sin el uso de la variable
	
    echo "Los datos fueron ingresados";
}
 mysql_close ($conec);

?>
