<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>



 <?php while($fila=mysql_fetch_array($res)){ ?>


  <td><input  type="text" value="<?php echo $fila['detalle']; ?>"/></td>
  <td><input  type="text" name="d11s" readonly="readonly" value="<?php echo $fila['cantp']; ?>"/></td>
 	<td><input type="text" name="d11c"  id="txtCantidad_11" onblur="calcularTotales(11)" /></td>
   <td><input  type="text"  style="text-align:right" value="<?php echo $fila['preciov']; ?>" id="txtPrecio_11" onblur="calcularTotales(11)"</td>
   <td><input type="text"  style="text-align:right" disabled="disabled" id="txtTotalLinea_11" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>