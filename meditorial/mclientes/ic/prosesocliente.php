<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from detallespedidos where nump='".$_POST['pedido']."'",$con);

?>

<table border="1">

 <tr>
     
     <th>Numero de Pedido</th>
     <th>Fecha</th>
     <th>Total Final</th>
	 <th>Entregado</th>
	 <th>Pagado</th>
	
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