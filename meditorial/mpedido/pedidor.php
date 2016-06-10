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

		<script type="text/javascript" src="scripts.js">
		</script>

<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">

<div class="arriba">
<h1 align="center"><i><u><font color="white" face="Lubalin Graph">Pedido</font> </u></i></h1>
</div> 

<div class="fondo2" align="center">
<img src="m.png" width="250" height="90" vspace="20px">

<img src="logo solo.jpg" width="180" height="200" vspace="50px">
</div>


<div class="medio" align="center">
<h2>Seleccionar fecha y hora</h2> <?php include 'acnx.php';   ?>

<form action="agregapedido.php" method="post">


<input name="fechaped" type="datetime-local"/>


<br>

<h2>Seleccionar numero de establecimiento</h2>

<?php

	$select = '-';
	$res = mysql_query("select * from clientes order by nume");
	if (mysql_num_rows($res)) {
		$select = '<select name="esc" onchange="mostrarInfo14(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[nume]'>$row[nume]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	
	
	<div id="datos14"></div>

<table>
<tr>
<td>
	<?php
	

	$select = '-';
	$row = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p1" onchange="mostrarInfo(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';
		
		while ($row = mysql_fetch_array($res)){
			$select .= "<option value='$row[0]'>$row[0]</option>";
}
		$select .= '</select>';
	}

	echo $select;	
	

	?>
	</td>
	<td>
	<div id="datos"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p2" onchange="mostrarInfo1(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos1"><?php echo $row[1] ?></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p3" onchange="mostrarInfo2(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos2"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p4" onchange="mostrarInfo3(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos3"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p5" onchange="mostrarInfo4(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos4"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p6" onchange="mostrarInfo5(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos5"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p7" onchange="mostrarInfo6(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos6"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p8" onchange="mostrarInfo7(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos7"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p9" onchange="mostrarInfo8(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos8"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p10" onchange="mostrarInfo9(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos9"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p11" onchange="mostrarInfo10(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos10"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p12" onchange="mostrarInfo11(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos11"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p13" onchange="mostrarInfo12(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos12"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select name="p14" onchange="mostrarInfo13(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos13"></div></td>
	</tr>
	<tr align="left">
					<td colspan="3" align="right"><h1>Total Final</h1>
					</td>
					<td>
						<input type="text"  style="text-align:right" readonly="readonly" id="txtTotal" name="totalf"/>
					</td>
				</tr>
	</table>
	
 
 
				<br>
				<br>
				<font face="Lubalin Graph" size="5" color="#cb0330"> Entrega del Pedido </font> 
	<select name="entrega">
		<option> no</option>
		<option> si</option>
	</select>		
	
<font face="Lubalin Graph" size="5" color="#211ce3"> Realizacion del pago </font> 
	<select name="pago">
		<option> no</option>
		<option> si</option>
	</select>		
	<br>	
	 
	<br>
					<input class="button" type="submit" value="REALIZAR" onclick="window.print();"/>
				</form>
				
				<br>
<a href='inicio5.php'><input class="button" type="button" value="Atras"></a>				
<a href='../inicio.php'><input class="button" type="button" value="Volver a inicio"></a>
			
		</div>
		
		<div class="arriba">
<h1 align="center"><font color="white" face="Lubalin Graph">ORIENTACI&Oacute;N para el FUTURO</font></h1>
</div>
		
		</body>
		</html>