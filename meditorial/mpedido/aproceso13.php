<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>



 
 <?php while($fila=mysql_fetch_array($res)){ ?>


  <td><input  type="text" value="<?php echo $fila['detalle']; ?>"/></td>
  <td><input  type="text" name="d14s" readonly="readonly" value="<?php echo $fila['cantp']; ?>"/></td>
 	<td><input type="text" name="d14c"  id="txtCantidad_14" onblur="calcularTotales(14)" /></td>
   <td><input  type="text"  style="text-align:right" value="<?php echo $fila['preciov']; ?>" id="txtPrecio_14" onblur="calcularTotales(14)"</td>
   <td><input type="text"  style="text-align:right" disabled="disabled" id="txtTotalLinea_14" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>