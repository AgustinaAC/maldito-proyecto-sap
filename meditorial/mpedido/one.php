<html>
	<head>
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
xmlhttp.open("get","aproceso.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cod_banda="+cod);

}

</script>
</head>
<body>
<?php include 'acnx.php';   ?>
<td>
<form>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select onchange="mostrarInfo(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	
	</form>
	<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_GET['cod_banda']."'",$con);

?>

<table border="1">

 <tr>
     <th>Codigo</th>
     <th>Producto</th>
     <th>Precio de Venta</th>
     <th>Cantidad</th>
 </tr>

 <?php while($fila=mysql_fetch_array($res)){ ?>

 <tr>
     <td><?php echo $fila['codp']; ?></td>
     <td><?php echo $fila['detalle']; ?></td>
     <td><?php echo $fila['preciov']; ?></td>
     <td><?php echo $fila['cantp']; ?></td>
 </tr>

 <?php } ?>

</table>

<?php mysql_close($con); ?>
	<div id="datos"></div>
	</body>
	</html>