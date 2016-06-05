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
<html>
<head>
<title>meditorial</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<script>
	function mostrarInfo(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","pproceso.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cp="+cod);

}
</script>
</head>
<body background="f.png" style="background-attachment: fixed">
<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">Proveedores</font> </u></h1>
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
		
		$sql="select * from proveedores where id='$bus'";
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
		$id=$_POST["txtcod"];
		$rzs=$_POST["txtnom"];
		$dire=$_POST["txtdom"];
		$cp=$_POST["txtcp"];
		$tele=$_POST["tel"];
		$celu=$_POST["txtcel"];
		$mail=$_POST["txtemail"];
		$detalle=$_POST["txtobs"];
		
		$sql="update proveedores set id='$id',rzs='$rzs',dire='$dire',cp='$cp',tele='$tele',celu='$celu',mail='$mail',detalle='$detalle' where id='$id'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		}
	
?>
<form name="fe" action="" method="post">
<center>
<table border="2">
<tr>
<br>
<td> <font face="Lubalin Graph" size="4">  Buscar Proveedor </font> </td>
<td><input type="text" name="txtbus"/></td>
<td><input type="submit" name="btn1" class="button" value="Buscar"  /></td>
</tr></table>
<br>
<table border="2">
<tr>
<td><font face="Lubalin Graph" size="4">Numero de Identificacion </font></td>
<td><input type="text" name="txtcod" size="30"  readonly="readonly"  value="<?php echo $var?>" /></td>
</tr>

<tr>
<td><font face="Lubalin Graph" size="4">Razon Social</font></td>
<td><input type="text" name="txtnom" size="30"  value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Domicilio </font></td>
<td><input type="text" name="txtdom" size="30"   value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Codigo Postal</font></td>
<td>
<?php

	$select = '-';
	$res = mysql_query("select * from codigospostales order by cp");
	if (mysql_num_rows($res)) {
		$select = '<select  onchange="mostrarInfo(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[id]'>$row[desc]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
<div id="datos"></div>
<?php echo $var3?></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Telefono</font></td>
<td><input type="text" name="tel" size="30"  value="<?php echo $var4?>"/></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Celular</font></td>
<td><input type="text" name="txtcel"size="30"   value="<?php echo $var5?>"/></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Email</font></td>
<td><input type="text" name="txtemail" size="30"  value="<?php echo $var6?>"/></td>
</tr>
<tr>
<td><font face="Lubalin Graph" size="4">Observaciones</font></td>
<td><input type="text" name="txtobs" size="30" value="<?php echo $var7?>"/></td>
</tr>

</table>
<br>
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
		
		$sql="select * from proveedores";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3'>
<tr>
<td>Numero de Identificacion</td>
<td>Razon Social</td>
<td>Domicilio</td>
<td>Codigo Postal</td>
<td>Telefono</td>
<td>Celular</td>
<td>E-mail</td>
<td>Detalles</td>
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


<a href='inicio3.php'><input class="button" type="button" value="Atras"></a>
<a href='../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>

</div>
</body>
</html>