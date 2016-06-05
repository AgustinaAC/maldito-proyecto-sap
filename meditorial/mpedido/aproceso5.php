<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>



 
 <?php while($fila=mysql_fetch_array($res)){ ?>


  <td><input  type="text" value="<?php echo $fila['detalle']; ?>"/></td>
  <td><input  type="text" name="d6s" readonly="readonly" value="<?php echo $fila['cantp']; ?>"/></td>
 	<td><input type="text" name="d6c"  id="txtCantidad_6" onblur="calcularTotales(6)" /></td>
   <td><input  type="text"  style="text-align:right" value="<?php echo $fila['preciov']; ?>" id="txtPrecio_6" onblur="calcularTotales(6)"</td>
   <td><input type="text"  style="text-align:right" disabled="disabled" id="txtTotalLinea_6" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>