<?php
session_start(); 

if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            header("location:index.php"); 
        } 
    } 
else 
{   
       // Usuario que no se ha logueado 
      echo '<a href="../index.php">Es necesario Loguearse</a>'; 
	  
       exit(); 
}  
}
?>
<?php
include("conexion.php");
?>
<?php include 'cnx.php';   ?>

<html>
<head>
<title>meditorial</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">
<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Agregar Stock</font> </u></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>
<div class="medio" align="center">
<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";


if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
	
	if($btn=="Buscar"){
		
		$sql="select * from productos where codp='$bus'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			
			}
		} 
		
		
		if($btn=='Agregar'){
		$codigo=$_POST["txtcod"];
		$producto=$_POST["txtprod"];
		$canta=$_POST["txtcan"];
		$pcompra=$_POST["txtpc"];
		$pventa=$_POST["txtventa"];
		$porcentaje=$_POST["txtpor"];
		$as=$_POST["astock"];
		$cantidad=$canta+$as;
		
		$sql="update productos set codp='$codigo',detalle='$producto',cantp='$cantidad',precioc='$pcompra',preciov='$pventa',gana='$porcentaje' where codp='$codigo'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		}
	
?>
<form name="fe" action="" method="post">
<center>
<table border="2">
<br>
<br>
<tr>
<td><font face="Lubalin Graph" size="4">Buscar numero de Producto </font></td>
<td><?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select id="selND" name="txtbus" style="width:200px">';
		$select .= '<option value=1 selected style="width:150px">Seleccionar</option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?></td>
<td><input type="submit" name="btn1" class="button" value="Buscar"  /></td>
</tr></table>

<br>
<br>

<table border="2">
<tr>
<td><font face="Lubalin Graph" size="4">  Numero de Producto </font></td>
<td><input type="text" name="txtcod" readonly="readonly" size="80" value="<?php echo $var?>" /></td>
</tr>

<tr>
<td> <font face="Lubalin Graph" size="4"> Producto </font></td>
<td><input type="text" name="txtprod" readonly="readonly" size="80" value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4">  Cantidad de Producto actual </font></td>
<td><input type="text" name="txtcan" readonly="readonly" size="80" value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4"> Precio de Compra</font></td>
<td><input type="text" name="txtpc"  style="text-align:right" readonly="readonly" size="80"   value="<?php echo $var3?>"/></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4"> Precio de Venta </font></td>
<td><input type="text" name="txtventa" style="text-align:right" readonly="readonly" size="80"  value="<?php echo $var4?>"/></td>
</tr>
<tr>
<td>  <font face="Lubalin Graph" size="4">Porcentaje de Ganancia </font></td>
<td><input type="text" name="txtpor" readonly="readonly" size="80" value="<?php echo $var5?>"/></td>
</tr>
<tr>
<td>  <font face="Lubalin Graph" size="4">Cantidad a Agregar</font></td>
<td><input type="text" name="astock" size="80"/></td>
</tr>

</table>

<br><br>
<input type="submit" class="button" name="btn1" value="Agregar"/>
<input type="submit" class="button" name="btn1" value="Listar"/>

</center>
<br />
<hr>
</form>
<br />



<?php
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];

	if($btn=="Listar"){
		
		$sql="select * from productos";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3'>
<tr>
<td>Numero de Producto</td>
<td>Producto</td>
<td>Cantidad</td>
<td>Precio de Compra</td>
<td>Precio de Venta</td>
<td>Porcentage de ganancia</td>

</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>

</tr>";
			}
			
			echo "</table>
</center>";
	}
	}
?>
<br>
<br>

<a href='inicio4.php'><input class="button" type="button" value="Atras"></a>
<a href='../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>

</div>
</body>
</html>