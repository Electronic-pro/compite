<?php 
//Proceso de conexión con la base de datos
$conex = new mysqli("localhost","root","cristian1","honorarios"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
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
$consulta= "SELECT id_usuario,nombre_usuario,pw_usuario,rol_usuario,correo_usuario,estado FROM usuario WHERE correo_usuario='".$correo_usuario."' AND pw_usuario='".$pw_usuario."'"; 
$resultado = mysqli_query($conex,$consulta) or die('Error:'.mysqli_error());
$fila=mysqli_fetch_array($resultado);
$rol=$fila['rol_usuario'];
$estado=$fila['estado'];

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
	$_SESSION['correo_usuario'] = $fila['correo_usuario'];
    header("Location: index2.php");	
}
   if ($rol=='Tutor') {
   	if($estado=='Activado'){
		$_SESSION['id_usuario'] = $fila['id_usuario'];//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['correo_usuario'] = $fila['correo_usuario'];
    header("Location: home_tutorias.php");	
    	}

    
    	else {
    			echo '<script language = javascript>
	alert("Usuario no esta activado, comuniquece con el administrador o espere activacion.")
	self.location = "index.php"
	</script>';
    	}
}

	else if ($rol=='Ingeniero' or $rol=='Profesor') {
		if ($estado=='Activado') {
			$_SESSION['id_usuario'] = $fila['id_usuario'];//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['correo_usuario'] = $fila['correo_usuario'];
    header("Location: home_proyectos.php");
		}
		else {
    			echo '<script language = javascript>
	alert("Usuario no esta activado, comuniquece con el administrador o espere activacion.")
	self.location = "index.php"
	</script>';
    	}
    		
    	}

//else {
//		$_SESSION['id_usuario'] = $fila['id_usuario'];//Definimos las variables de sesión y redirigimos a la página de usuario
//	$_SESSION['usuario'] = $fila['usuario'];
		 // header("Location: ../pagina_fan.php");		
//	}	 	
}
?>