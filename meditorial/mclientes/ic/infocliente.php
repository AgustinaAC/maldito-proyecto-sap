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
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Clientes</font> </u></h1>
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
$var6="";
$var7="";

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
	
	if($btn=="Buscar"){
		
		$sql="select * from clientes where nume='$bus'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			$var6=$resul[6];
			$var7=$resul[7];
			}
		} 
		
		
		if($btn=='Modificar'){
		$nume=$_POST["txtcod"];
		$rzs=$_POST["txtnom"];
		$dom=$_POST["txtdom"];
		$cp=$_POST["txtcp"];
		$tel=$_POST["tel"];
		$cel=$_POST["txtcel"];
		$email=$_POST["txtemail"];
		$obs=$_POST["txtobs"];
		
		$sql="update clientes set nume='$nume',rzs='$rzs',dom='$dom',cp='$cp',tel='$tel',cel='$cel',email='$email',obs='$obs' where nume='$nume'";
		
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
<td><font face="Lubalin Graph" size="4">Buscar numero de Escuela </font></td>
<td><?php

	$select = '-';
	$res = mysql_query("select * from clientes order by nume");
	if (mysql_num_rows($res)) {
		$select = '<select id="selND" name="txtbus" style="width:500px">';
		$select .= '<option value=1 selected style="width:150px">Seleccionar</option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[nume]'>$row[nume]</option>";

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
<td><font face="Lubalin Graph" size="4">  Numero de Escuela </font></td>
<td><input type="text" name="txtcod" readonly="readonly" size="80" value="<?php echo $var?>" /></td>
</tr>

<tr>
<td> <font face="Lubalin Graph" size="4"> Nombre de la Escuela </font></td>
<td><input type="text" name="txtnom" size="80" value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4">  Domicilio </font></td>
<td><input type="text" name="txtdom" size="80" value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td>Codigo Postal</td>

<td>
<?php

	$select = '-';
	$res = mysql_query("select * from codigospostales order by cp");
	if (mysql_num_rows($res)) {
		$select = '<select id="selND" name="txtcp" style="width:500px">';
		$select .= '<option value=1 selected style="width:150px">Seleccionar</option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[cp]'>$row[cp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>


<?php echo $var3?></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4"> Telefono </font></td>
<td><input type="text" name="tel" size="80"  value="<?php echo $var4?>"/></td>
</tr>
<tr>
<td>  <font face="Lubalin Graph" size="4">Celular </font></td>
<td><input type="text" name="txtcel" size="80" value="<?php echo $var5?>"/></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Email</font></td>
<td><input type="text" name="txtemail" size="80"  value="<?php echo $var6?>"/></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Observaciones</font></td>
<td><input type="text" name="txtobs" size="80" value="<?php echo $var7?>"/></td>
</tr>

</table>

<br><br>
<input type="submit" class="button" name="btn1" value="Modificar"/>
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
		
		$sql="select * from clientes";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3'>
<tr>
<td>Numero de Escuela</td>
<td>Nombre</td>
<td>Domicilio</td>
<td>Codigo Postal</td>
<td>Telefono</td>
<td>Celular</td>
<td>E-mail</td>
<td>Observaciones</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			$var6=$resul[6];
			$var7=$resul[7];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>
<td>$var6</td>
<td>$var7</td>
</tr>";
			}
			
			echo "</table>
</center>";
	}
	}
?>
<br>
<br>

<a href='inicio2.php'><input class="button" type="button" value="Atras"></a>
<a href='../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>

</div>
</body>
</html>