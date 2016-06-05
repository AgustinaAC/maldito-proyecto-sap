<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>



 
  <?php while($fila=mysql_fetch_array($res)){ ?>


  <td><input  type="text" value="<?php echo $fila['detalle']; ?>"/></td>
  <td><input  type="text" name="d5s" readonly="readonly" value="<?php echo $fila['cantp']; ?>"/></td>
 	<td><input type="text" name="d5c"  id="txtCantidad_5" onblur="calcularTotales(5)" /></td>
   <td><input  type="text"  style="text-align:right" value="<?php echo $fila['preciov']; ?>" id="txtPrecio_5" onblur="calcularTotales(5)"</td>
   <td><input type="text"  style="text-align:right" disabled="disabled" id="txtTotalLinea_5" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>