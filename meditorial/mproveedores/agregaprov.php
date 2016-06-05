
<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
 
  $nom=$_POST["nom"];
  $dir=$_POST["dir"];
  $cpost=$_POST["txtcp"];
  $tel=$_POST["tel"];
  $cel=$_POST["cel"];
  $mail=$_POST["mail"];
  $obs=$_POST["obs"];
  
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
	
	
    $in="insert into proveedores(rzs, dire, cp, tele, celu, mail, detalle)"."values('$nom','$dir','$cpost','$tel','$cel','$mail','$obs')";
	
    $result=mysql_query($in); // puede usarse sin el uso de la variable
	
    echo "Los datos fueron ingresados";
}
 mysql_close ($conec);

?>
<a href='../inicio.php'><input class="button2" type="button" value="Volver a inicio"></a>