<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from clientes where nume='".$_POST['escuela']."'",$con);

?>

<table border="1">

 <tr>
     
     <th>Escuela</th>
     <th>Domicilio</th>
     <th>Codigo Postal</th>
	 <th>Telefono</th>
	 <th>Celular</th>
	 <th>Email</th>
	 <th>Observaciones</th>
 </tr>

 <?php while($fila=mysql_fetch_array($res)){ ?>

 <tr>
    
     <td><?php echo $fila['rzs']; ?></td>
     <td><?php echo $fila['dom']; ?></td>
     <td><?php echo $fila['cp']; ?></td>
	 <td><?php echo $fila['tel']; ?></td>
	 <td><?php echo $fila['cel']; ?></td>
	 <td><?php echo $fila['email']; ?></td>
	 <td><?php echo $fila['obs']; ?></td>
 </tr>

 <?php } ?>

</table>

<?php mysql_close($con); ?>