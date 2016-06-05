<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>



 
 <?php while($fila=mysql_fetch_array($res)){ ?>


  <td><input  type="text" value="<?php echo $fila['detalle']; ?>"/></td>
  <td><input  type="text" name="d9s" readonly="readonly" value="<?php echo $fila['cantp']; ?>"/></td>
 	<td><input type="text" name="d9c"  id="txtCantidad_9" onblur="calcularTotales(9)" /></td>
   <td><input  type="text"  style="text-align:right" value="<?php echo $fila['preciov']; ?>" id="txtPrecio_9" onblur="calcularTotales(9)"</td>
   <td><input type="text"  style="text-align:right" disabled="disabled" id="txtTotalLinea_9" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>