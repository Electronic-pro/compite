<?php
//include ('conexion.php');
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['pass'];

if ($usuario = 'admin' && $password = 'admin'){
$_SESSION['autenticacion']="1";
$_SESSION['user']=$_POST ["user"];
$_SESSION['pass']=$_POST ["pass"];
header ("Location: index2.html");
} 
else {
	//echo '<script>alert("Usuario o contraseña incorrecta")</script> ';
header ("Location:index.html?error=1");
}
/*
$sQL = "SELECT * FROM usuario WHERE nombre_usuario = '$usuario' AND pw_usuario = '$password'";
$eXEsQL = mysql_query($sQL, $conectar) or die ("Error en la consulta");
$iMPeXEsQL = mysql_fetch_row($eXEsQL);
if ($iMPeXEsQL){
	$_SESSION['autenticacion']="1";
	$_SESSION['nombreusuario']= $iMPeXEsQL[1];
	header ("Location: index2.html");
} 
else {
	header ("Location:index.html?error=1");
}*/
?>