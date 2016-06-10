<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>



 

 <?php while($fila=mysql_fetch_array($res)){ ?>


 <td><input  type="text" value="<?php echo $fila[0]; ?>"/></td>
  <td><input  type="text" name="d2s" readonly="readonly" value="<?php echo $fila[0]; ?>"/></td>
 	<td><input type="text" name="d2c"  id="txtCantidad_2" onblur="calcularTotales(2)" /></td>
   <td><input  type="text"  style="text-align:right" value="<?php echo $fila[0]; ?>" id="txtPrecio_2" onblur="calcularTotales(2)"</td>
   <td><input type="text"  style="text-align:right" disabled="disabled" id="txtTotalLinea_2" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>