<?php

include 'conexion.php';

$con=conexion();

$res=mysql_query("select * from clientes where nume='".$_POST['datosesc']."'",$con);

?>

<table border="1">

 
 <?php while($fila=mysql_fetch_array($res)){ ?>

 
    
     <td><?php echo $fila['rzs']; ?></td>
     <td><?php echo $fila['dom']; ?></td>
     <td><?php echo $fila['cp']; ?></td>
	 <td><?php echo $fila['tel']; ?></td>
	 <td><?php echo $fila['cel']; ?></td>
	 <td><?php echo $fila['email']; ?></td>
	 <td><?php echo $fila['obs']; ?></td>

 <?php } ?>



<?php mysql_close($con); ?>