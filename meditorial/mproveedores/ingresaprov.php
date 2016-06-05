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

<html>
<head>
<title></title>
<meta name="" content="">
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
<?php include 'cnx.php';   ?>
<div class="arriba">
<h1 align="center"><i><u><font color="white" face="Lubalin Graph">Proveedor</font> </u></i></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio" align="center">
 <form action="agregaprov.php" method="post">
<br>
<br>
<br>
     <table border="2">
	 <tr>
	<td><font face="Lubalin Graph" size="4">Proveedor:</font></td>
	<td colspan="10"><input type="text" name="nom" size="45"/></td>
	</tr>
	<tr>
	<td> <font face="Lubalin Graph" size="4">Direccion:</font></td> 
	<td colspan="10"><input type="text" name="dir" size="45"/></td>
	 </tr>
     <tr>
	 <td> <font face="Lubalin Graph" size="4">Codigo Postal:</font></td> 
	<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from codigospostales order by cp");
	if (mysql_num_rows($res)) {
		$select = '<select onchange="mostrarInfo(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[id]'>$row[desc]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
		<div id="datos"></div>
	</td>
	 </tr>
	   <tr>
	 <td> <font face="Lubalin Graph" size="4">Telefono:</font></td> 
	<td colspan="10"><input type="text" name="tel" size="45"/></td>
	 </tr>
	   <tr>
	 <td> <font face="Lubalin Graph" size="4">Celular</font></td> 
	<td colspan="10"><input type="text" name="cel" size="45"/></td>
	 </tr>
	  <tr>
	 <td> <font face="Lubalin Graph" size="4">e-mail</font></td> 
	<td colspan="10"><input type="text" name="mail" size="45"/></td>
	 </tr>
	   <tr>
	 <td> <font face="Lubalin Graph" size="4">Detalles</font></td> 
	<td colspan="10"><input type="text" name="obs" size="45"/></td>
	 </tr>
	
</table>
<input class="button" type="submit" value="ENVIAR"/>
</form>

<br>
<a href='inicio3.php'><input class="button" type="button" value="Atras"></a>
<a href='../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>
</div>

<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>


</body>
</html>