<?php

include 'conexion3.php';

$con=conexion();

$res=mysql_query("select * from codigospostales where id='".$_POST['cp']."'",$con);

?>



 
 <?php while($fila=mysql_fetch_array($res)){ ?>


  <input  type="text" name="txtcp" value="<?php echo $fila['cp']; ?>"/>
 	

 <?php } ?>

</table>

<?php mysql_close($con); ?>