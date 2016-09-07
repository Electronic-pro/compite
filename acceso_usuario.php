<?php 
//Proceso de conexión con la base de datos
$conex = new mysqli("localhost","bax","bax","honorarios"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
if (!$conex) {
die('Connect Error: '.mysqli_connect_error());
}

////Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}


//Recibir los datos ingresados en el formulario
$correo_usuario= $_POST['correo_usuario'];
$pw_usuario= $_POST['pw_usuario'];



//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT id_usuario,nombre_usuario,pw_usuario,rol_usuario,correo_usuario FROM usuario WHERE correo_usuario='".$correo_usuario."' AND pw_usuario='".$pw_usuario."'"; 
$resultado = mysqli_query($conex,$consulta) or die('Error:'.mysqli_error());
$fila=mysqli_fetch_array($resultado);
$rol=$fila['rol_usuario'];

if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS

{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "index.php"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	if ($rol=='Admin') {
		$_SESSION['id_usuario'] = $fila['id_usuario'];//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['ncorreo_usuario'] = $fila['correo_usuario'];
    header("Location: index2.php");	
}

//else {
//		$_SESSION['id_usuario'] = $fila['id_usuario'];//Definimos las variables de sesión y redirigimos a la página de usuario
//	$_SESSION['usuario'] = $fila['usuario'];
		 // header("Location: ../pagina_fan.php");		
//	}	 	
}
?>