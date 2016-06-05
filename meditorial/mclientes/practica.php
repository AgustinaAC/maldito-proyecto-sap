<html>
<head>
<title></title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="estilo.css">
 <?php 
  $conec=mysql_connect("localhost","root",""); //conexión con el servidor
if(!$conec){
    echo "La conexión no se realizó con éxito";
    exit();
}else{
    mysql_select_db("meditorial");}
$consulta='select codigospostales from meditorial order by cp';
$result=mysql_query($consulta);
  ?>
</head>
<body background="f.png" style="background-attachment: fixed">

<div class="arriba">
<h1 align="center"><i><u><font color="white" face="Lubalin Graph">Cliente</font> </u></i></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="300" height="90" vspace="30px">

<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>

<div class="medio" align="center">
 <form action="agrega.php" method="post">
<br>
<br>
<br>
     <table border="2">
	 <tr>
	<td><font face="tahoma" size="4">Numero de Escuela:</font></td> 
	<td colspan="10"><input  type="text" name="ne" size="45"/></td>
	</tr>
	<tr>
	<td><font face="tahoma" size="4">Escuela:</font></td>
	<td colspan="10"><input type="text" name="nom" size="45"/></td>
	</tr>
	<tr>
	<td> <font face="tahoma" size="4">Direccion:</font></td> 
	<td colspan="10"><input type="text" name="dir" size="45"/></td>
	 </tr>
	<tr>
	<td> <font face="tahoma" size="4">Codigo Postal</font></td>
	<td>
	
  <select name="cp">
  <option value="">Codigos Postales</option>
  <?
  while($fila=mysql_fetch_row($result)){
  echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
  }
  ?>
  </select>
   </td>
	 </tr>
	   <tr>
	 <td> <font face="tahoma" size="4">Telefono:</font></td> 
	<td colspan="10"><input type="text" name="tel" size="45"/></td>
	 </tr>
	   <tr>
	 <td> <font face="tahoma" size="4">Celular</font></td> 
	<td colspan="10"><input type="text" name="cel" size="45"/></td>
	 </tr>
	  <tr>
	 <td> <font face="tahoma" size="4">e-mail</font></td> 
	<td colspan="10"><input type="text" name="mail" size="45"/></td>
	 </tr>
	   <tr>
	 <td> <font face="tahoma" size="4">Observaciones</font></td> 
	<td colspan="10"><input type="text" name="obs" size="45"/></td>
	 </tr>
	  <tr>
	<td><input class="button" type="submit" value="ENVIAR"/></td>
	</tr>
</table>

</form>
<a href='inicio2.html'><input class="button2" type="button" value="Atras"></a>
<a href='../inicio.html'><input class="button2" type="button" value="Volver a inicio"></a>
</div>

<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>
</body>
</html>

