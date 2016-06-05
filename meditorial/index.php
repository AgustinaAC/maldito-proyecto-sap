<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment:fixed">

<div>
<img src="m.png" width="1000" height="300" hspace="300px">
</div>

<div class="medio" align="center">
<br>
<br>
<br>

<?php 
session_start(); 
include_once "conexion.php"; 
  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'"; 
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            header("location:index.php"); 
        } 
        else 
        { 
            echo '<div class="error">Su Usuario o Clave es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
?>
  
<style type="text/css" > 
*{ 
    font-size: 18px; 
} 
body{background="f.png" style="background-attachment:fixed"
} 
form.login { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 50px; 
    width: 300px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.login div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.login div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.login div input[type="text"], form.login div input[type="password"] { 
    border: 2px solid black; 
    float: right; 
    padding: 4px; 
} 
form.login div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid blue; 
    float: right; 
    font-weight: bold; 
    padding: 4px 50px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 
  
<form method="post" class="login">
<font face="Lubalin Graph" color="black">
   <br><b> <div><label>Usuario</label><input name="user" type="text"></b></div> 
   <br><b> <div><label>Clave</label><input name="password" type="password"></b></div> 
    <div><input name="login" type="submit" value="ingresar"></div> 
</font>
</form> 
<br>
<p align="center"><a href="enviarmail.php">No recuerdas tu clave?</a></p>
<div>
<tr align="center">
	<td style="background-color: red">
  <br><br><b><font color="red" face="Lubalin Graph" size="6">Si desea Salir del programa en modo pantalla completa, presione simultaneamente AlT+F4 </font>
	</td>
</tr>

</div>



<?php 

} else { 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<br><br><a href="inicio.php">Seguir</a>'; 
	
	
	 echo '<br><br><a href="logout.php">Desloguear</a>'; 
} 
?>
<br>
<br>
<a href='manual.pdf'><img src="ayuda.png" width="150" height="150" hspace="30px"></a> 


</body>
</html>