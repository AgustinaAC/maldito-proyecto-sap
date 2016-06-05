<?php
include ('funciones.php');
//uso de la funcion verificar_usuario()
if (verificar_usuario()){
	//si el usuario es verificado puede acceder al contenido permitido a el
	print "Hola $_SESSION[usuario]<br/>Ingresa a otra parte del sistema si deseas <a href='Disco local/xampp/htdocs/meditorial/inicio.html'>clic aqui</a><br/>";
	print "Desconectarse <a href='salir.php'/>aqui</a>";
} else {
	//si el usuario no es verificado volvera al formulario de ingreso
	header('Location:index.php');
}
?>