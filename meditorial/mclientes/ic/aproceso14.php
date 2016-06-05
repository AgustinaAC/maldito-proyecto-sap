<?php

include 'conexion3.php';

$con=conexion();

$res=mysql_query("select * from detallespedidos where nume='".$_POST['pedido']."'",$con);

?>

<table border="1">

 <tr>
     
     <th>Numero de Pedido</th>
     <th>Fecha y Hora</th>
     <th>Importe Total</th>
	 <th>Entrga</th>
	 <th>Pago</th>
	 
 </tr>

 <?php while($fila=mysql_fetch_array($res)){ ?>

 <tr>
    
     <td><?php echo $fila['nump']; ?></td>
     <td><?php echo $fila['fechapedido']; ?></td>
     <td><?php echo $fila['importe']; ?></td>
	 <td><?php echo $fila['entrega']; ?></td>
	 <td><?php echo $fila['pago']; ?></td>
	 
 </tr>

 <?php } ?>

</table>

<?php mysql_close($con); ?>