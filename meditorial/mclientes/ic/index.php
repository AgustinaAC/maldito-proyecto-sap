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
      echo '<a href="../../index.php">Es necesario Loguearse</a>'; 
	  
       exit(); 
}  
}
?>
<?php
include("conexion.php");
include ("cnx.php"); 
include("conexion1.php");
?>

<html>
	    <head>
        <title>Informe de Pedidos</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
        
   			<script>
			function informes(cod){

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
    document.getElementById("informe").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("informe").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso14.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("pedido="+cod);

}
  	
        </script>
		
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
		Selecciona un Escuela
			<br>
        <?php

	$select = '-';
	$res = mysql_query("select * from clientes order by nume");
	if (mysql_num_rows($res)) {
		$select = '<select name="escuela" id="escuela" onchange="informes(this.value);">';
		$select .= '<option  selected style="width:150px">Escuela</option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[nume]'>$row[nume]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	
	
	<div id="informe"></div>
		<br>
	<br>
		
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
		
		$sql="select * from detallespedidos where nump='$bus'";
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
		
		
		if($btn=='Pagado'){
		$nump=$_POST["txtnump"];
		$pago='si';
		
			
$sql="update detallespedidos set pago='$pago' where nump='$nump'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('El pedido ha sido pagado');</script>";
		}
		if($btn=='Entregado'){
		$nump=$_POST["txtnump"];
		$entrega='si';
		
			
$sql="update detallespedidos set entrega='$entrega' where nump='$nump'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('El pedido ha sido entregado');</script>";
		}
		}
	
?>
<form name="fe" action="" method="post">
<center>
<table border="2">
<br>
<br>
<tr>
<td><font face="Lubalin Graph" size="4">Numero de pedido</font></td>
<td><?php

	$select = '-';
	$res = mysql_query("select * from detallespedidos order by nump");
	if (mysql_num_rows($res)) {
		$select = '<select id="selND" name="txtbus" style="width:100px">';
		$select .= '<option value=1 selected style="width:70px">Seleccionar</option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[nump]'>$row[nump]</option>";

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
<td><font face="Lubalin Graph" size="4">  Numero de Pedido </font></td>
<td><input type="text" name="txtnump" readonly="readonly" size="80" value="<?php echo $var?>" /></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4"> Fecha y Hora </font></td>
<td><input type="text" name="txtfecha"readonly="readonly" size="80" value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4">  Numero de Escuela </font></td>
<td><input type="text" name="txtesc" readonly="readonly" size="80" value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4"> Importe </font></td>
<td><input type="text"  style="text-align:right" readonly="readonly" name="txtimporte" size="80"  value="<?php echo $var3?>"/></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4"> Entrega </font></td>
<td>
		<?php echo $var4?></td>
</tr>
<tr>
<td> <font face="Lubalin Graph" size="4"> Pago </font></td>
<td>	<?php echo $var5?></td>
</tr>




</table>

<br><br>
<input type="submit" class="button" name="btn1" value="Pagado"/>
<input type="submit" class="button" name="btn1" value="Entregado"/>
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
<a href='../inicio2.php'><input class="button" type="button" value="Atras"></a>
<a href='../../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>

</div>
</body>
</html>
    