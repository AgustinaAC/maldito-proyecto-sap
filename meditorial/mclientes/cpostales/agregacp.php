
<?php
  $cod=$_POST["codigos"];
  $desc=$_POST["descripcion"];
  
$conec=mysql_connect("localhost","root",""); //conexi�n con el servidor
if(!$conec){
    echo "La conexi�n no se realiz� con �xito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
	
	
    $in="insert into codigospostales( cp, desc)"."values('$cod','$desc')";
	
    $result=mysql_query($in); // puede usarse sin el uso de la variable
	
    echo "Los datos fueron ingresados";
}
 mysql_close ($conec);

?>
