<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="f.png" style="background-attachment: fixed">

<div class="arriba">
<h1 align="center"><u> <font color="white" face="Lubalin Graph">INGRESAR </u></h1>
</div> 
<div class="fondo2" align="center">
<img src="me.png" width="300" height="90" vspace="30px">
<img src="logo solo.jpg" width="180" height="200" vspace="50px">
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
            echo '<div class="error">Su usuario o contraseña es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
?> 
  
<style type="text/css"> 
*{ 
    font-size: 14px; 
} 
body{ 
background:#000000; 
} 
form.login { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #000000; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 278px; 
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
    border: 1px solid #000000; 
    float: right; 
    padding: 4px; 
} 
form.login div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #C6C6C6; 
    float: right; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 
  
<form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="loguin" type="submit" value="loguin"></div> 
</form> 
<?php 
} else { 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="../inicio.html">Seguir</a>'; 
	
	
	 echo '<br><a href="../logout.php">Desloguear</a>'; 
} 
?>
<tr>
	<td style="background-color: red">
		<h2 align="center"><font color="white">Si desea Salir del Programa presione simultaneamente AlT+F4</font></h2>
	</td>
</tr>
</div>

</body>
</html>