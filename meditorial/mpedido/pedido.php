<?php include 'cnx.php';   ?>

<head>
	<title>Realizar Pedido</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>


<div class="header">Realice su Pedido</div>

<form method="POST" action="">
<table cellspacing="0">
	<tr>
	<td>Pedido</td>
	<td><input type="text" id="txtpc" name="txtpc"></td>
	</tr>

	<tr>
	<td>Escuelas</td>
	<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from clientes order by nume");
	if (mysql_num_rows($res)) {
		$select = '<select id="selND" name="selND" style="width:400px">';
		$select .= '<option value=0 selected style="width:150px">Escuelas</option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[nume]'>$row[nume]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	</tr>

	<tr>
	<td>Produto</td>
	
	</tr>
	<?php


		echo '<form method="POST">';

	echo '<table cellspacing="2" border="1">';
	echo '<tr>';
	echo '<td>codigo de barras</td>';
	echo '<td>producto</td>';
	echo '<td>precio</td>';
	echo '<td>precio de venta</td>';
	echo '<td>cantidad</td>';
	echo '<td>Total de un producto</td>';
	echo '</tr>';
     $res = mysql_query("select * from productos");
     echo 'hola';
	if (mysql_num_rows($res)) {
	
		
		while ($row = mysql_fetch_array($res))   {
		    $c=0;
			echo '<tr>';
			echo '<td>'$row['codp']'</td>';
			echo '<td>'$row['detalle']'</td>';
			echo '<td>'.$row['precioc'].'</td>';
			$f= $row["precioc"]*30;
			$j= $f/100;
			$h= $j+$row["precioc"];
			echo"<td>".$h;
			echo '<td><input type="text" name="can" id="can"></td>';
			$r= 0;
			$r= $h*can;
			
			echo '<td><input type="text" value="'.$r.'"></td>';
			$c++;
		}
	
		echo '<tr><td colspan="5">Total: '.round($total, 2).'</td></tr>';
		echo '<tr><td colspan="5"><input type="submit" id="subactualizar" name="subactualizar" value="Actualizar Cantidades"></td></tr>';
		echo '<tr><td colspan="5"><a href=pedido.php?modo=t&codp='.'$codp'.'>Terminar Pedido</a></td></tr>';
	} else {
		echo '<tr><td colspan="5">No hay productos cargados</td></tr>';
	}

	echo '</table>';
	
	echo '<input type="hidden" id="cant_items" name="cant_items" value="'.$c.'" />';
	
	echo '</form>';



