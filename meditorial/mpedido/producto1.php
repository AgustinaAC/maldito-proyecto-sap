<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>



 
 <?php while($fila=mysql_fetch_array($res)){ ?>


  <td><input  type="text" value="<?php echo $fila['detalle']; ?>"/></td>
 	<td><input type="text" value="<?php echo $fila['cantp']; ?>"  id="txtCantidad_1" onblur="calcularTotales(1)" /></td>
   <td><input  type="text" value="<?php echo $fila['preciov']; ?>" id="txtPrecio_1" onblur="calcularTotales(1)"</td>
   <td><input type="text" disabled="disabled" id="txtTotalLinea_1" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>