<html>
	<head>
	
			
	<script type="text/javascript" src="scripts.js">
		</script>


</head>
<body>
<?php include 'acnx.php';   ?>

<form>
<table align="right" border="0">
<tr>
<input name="fechapedido" type="datetime-local"/>
</tr>
</table>
<br>
<br>


<?php

	$select = '-';
	$res = mysql_query("select * from clientes order by nume");
	if (mysql_num_rows($res)) {
		$select = '<select onchange="mostrarInfo13(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[nume]'>$row[nume]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	
	
	<div id="datos13"></div>

<table>
<tr>
<td>
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
		$select = '<select onchange="mostrarInfo1(this.value)">';
		$select .= '<option  selected style="width:150px"></option>';

		while ($row = mysql_fetch_array($res))
			$select .= "<option value='$row[codp]'>$row[codp]</option>";

		$select .= '</select>';
	}

	echo $select;

	?>
	</td>
	<td>
	<div id="datos1"></div></td>
	</tr>
	<tr>
<td>
	<?php

	$select = '-';
	$res = mysql_query("select * from productos order by codp");
	if (mysql_num_rows($res)) {
		$select = '<select onchange="mostrarInfo2(this.value)">';
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
		$select = '<select onchange="mostrarInfo3(this.value)">';
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
		$select = '<select onchange="mostrarInfo4(this.value)">';
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
		$select = '<select onchange="mostrarInfo5(this.value)">';
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
		$select = '<select onchange="mostrarInfo6(this.value)">';
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
		$select = '<select onchange="mostrarInfo7(this.value)">';
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
		$select = '<select onchange="mostrarInfo8(this.value)">';
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
		$select = '<select onchange="mostrarInfo9(this.value)">';
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
		$select = '<select onchange="mostrarInfo10(this.value)">';
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
		$select = '<select onchange="mostrarInfo11(this.value)">';
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
		$select = '<select onchange="mostrarInfo12(this.value)">';
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
					<td colspan="3" align="right"><h1>Total</h1>
					</td>
					<td>
						<input type="text" id="txtTotal" disabled="disabled"/>
					</td>
				</tr>
	</table>
	</form>
	
	</body>
	</html>