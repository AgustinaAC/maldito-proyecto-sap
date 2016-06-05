<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
  $cp=$_POST["c"];
  $desc=$_POST["d"];
  
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
	
	$total = mysql_num_rows(mysql_query("SELECT cp FROM codigospostales WHERE cp='$cp'"));
if($total==0){
     $in="insert into codigospostales(cp, desc)"."values('$cp','$desc')";
	
    $result=mysql_query($in); // puede usarse sin el uso de la variable
	
    echo "Los datos fueron ingresados";
}else{
    echo 'Este codigo ya existe';
}
   
}
 mysql_close ($conec);

?>
<a href='cpostales.php'><input class="button2" type="button" value="atras"></a>
<a href='../../inicio.php'><input class="button2" type="button" value="Volver a inicio"></a>

