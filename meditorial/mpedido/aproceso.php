<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from productos where codp='".$_POST['preciop']."'",$con);

?>
<table >

 <tr>
     
     <th>Producto</th>
     <th>Cantidad disponible</th>
	 <th>Cantidad</th>
     <th>Precio de Venta</th>
	 <th>Total del Producto</th>
	 
 </tr>


 
 <?php while($fila=mysql_fetch_array($res)){ ?>


  <td><input  type="text" value="<?php echo $fila['detalle']; ?>"/></td>
  <td><input  type="text" name="d1s" readonly="readonly" value="<?php echo $fila['cantp']; ?>"/></td>
 	<td><input type="text" name="d1c"  id="txtCantidad_1" onblur="calcularTotales(1)" /></td>
   <td><input  type="text"  style="text-align:right" value="<?php echo $fila['preciov']; ?>" id="txtPrecio_1" onblur="calcularTotales(1)"</td>
   <td><input type="text"  style="text-align:right" disabled="disabled" id="txtTotalLinea_1" /></td>

 <?php } ?>

</table>

<?php mysql_close($con); ?>