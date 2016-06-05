<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
   
  $p1=$_POST["p1"];
  $p2=$_POST["p2"];
  $p3=$_POST["p3"];
  $p4=$_POST["p4"];
  $p5=$_POST["p5"];
  $p6=$_POST["p6"];
  $p7=$_POST["p7"];
  $p8=$_POST["p8"];
  $p9=$_POST["p9"];
  $p10=$_POST["p10"];
  $p11=$_POST["p11"];
  $p12=$_POST["p12"];
  $p13=$_POST["p13"];
  $p14=$_POST["p14"];
  $fecha=$_POST["fechaped"];
  $escuela=$_POST["esc"];
  $totalf=$_POST["totalf"];
  $entrega=$_POST["entrega"];
  $pago=$_POST["pago"];
 
$conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial"); //conecta con la base de datos
	
	
    $in="insert into detallespedidos(fechapedido, nume, importe, entrega, pago)"."values('$fecha','$escuela','$totalf','$entrega','$pago')";
	
    $result=mysql_query($in); // puede usarse sin el uso de la variable
	
    
    echo "Los datos fueron ingresados";
}
 
 if($p1==TRUE){
    $d1c=$_POST["d1c"];
    $d1s=$_POST["d1s"];
    $s1=$d1s-$d1c;
	
    $on="update  productos set cantp='$s1' where codp='$p1'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
  
}
if($p2==TRUE){
    $d2c=$_POST["d2c"];
    $d2s=$_POST["d2s"];
    $s2=$d2s-$d2c;
	
    $on="update  productos set cantp='$s2' where codp='$p2'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p3==TRUE){
    $d3c=$_POST["d3c"];
    $d3s=$_POST["d3s"];
    $s3=$d3s-$d3c;
	
    $on="update  productos set cantp='$s3' where codp='$p3'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p4==TRUE){
    $d4c=$_POST["d4c"];
    $d4s=$_POST["d4s"];
    $s4=$d4s-$d4c;
	
    $on="update  productos set cantp='$s4' where codp='$p4'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p5==TRUE){
    $d5c=$_POST["d5c"];
    $d5s=$_POST["d5s"];
    $s5=$d5s-$d5c;
	
    $on="update  productos set cantp='$s5' where codp='$p5'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p6==TRUE){
    $d6c=$_POST["d6c"];
    $d6s=$_POST["d6s"];
    $s6=$d6s-$d6c;
	
    $on="update  productos set cantp='$s6' where codp='$p6'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p7==TRUE){
    $d7c=$_POST["d7c"];
    $d7s=$_POST["d7s"];
    $s7=$d7s-$d7c;
	
    $on="update  productos set cantp='$s7' where codp='$p7'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p8==TRUE){
    $d8c=$_POST["d8c"];
    $d8s=$_POST["d8s"];
    $s8=$d8s-$d8c;
	
    $on="update  productos set cantp='$s8' where codp='$p8'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p9==TRUE){
    $d9c=$_POST["d9c"];
    $d9s=$_POST["d9s"];
    $s9=$d9s-$d9c;
	
    $on="update  productos set cantp='$s9' where codp='$p9'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p10==TRUE){
    $d10c=$_POST["d10c"];
    $d10s=$_POST["d10s"];
    $s10=$d10s-$d10c;
	
    $on="update  productos set cantp='$s10' where codp='$p10'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p11==TRUE){
    $d11c=$_POST["d11c"];
    $d11s=$_POST["d11s"];
    $s11=$d11s-$d11c;
	
    $on="update  productos set cantp='$s11' where codp='$p11'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p12==TRUE){
    $d12c=$_POST["d12c"];
    $d12s=$_POST["d12s"];
    $s12=$d12s-$d12c;
	
    $on="update  productos set cantp='$s12' where codp='$p12'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p13==TRUE){
    $d13c=$_POST["d13c"];
    $d13s=$_POST["d13s"];
    $s13=$d13s-$d13c;
	
    $on="update  productos set cantp='$s13' where codp='$p13'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
if($p14==TRUE){
    $d14c=$_POST["d14c"];
    $d14s=$_POST["d14s"];
    $s14=$d14s-$d14c;
	
    $on="update  productos set cantp='$s14' where codp='$p14'";
	
    $result=mysql_query($on); // puede usarse sin el uso de la variable
	
}
 mysql_close ($conec);
?>
<a href='../inicio.php'><input class="button2" type="button" value="Volver a inicio"></a>