<!DOCTYPE html>
<html lang="en">
<head>
     <meta http-equiv="Refresh" content="0.2;usuarios.php">

</head><!--/head-->

<?php 
$conex = mysqli_connect("localhost", "root", "root")
        or die("No se pudo realizar la conexion");
    mysqli_select_db($conex,"honorarios")
        or die("ERROR con la base de datos");



$nombre_usuario=$_POST['nombre_usuario'];
$rut_usuario=$_POST['rut_usuario'];
$correo_usuario=$_POST['correo_usuario'];
$pw_usuario=$_POST['pw_usuario'];
$telefono_usuario=$_POST['telefono_usuario'];
$rol_usuario=$_POST['rol_usuario'];

$consulta= "SELECT * FROM usuario WHERE rut_usuario='".$rut_usuario."'"; 
$resultado2= mysqli_query($conex,$consulta) or die (mysqli_error());
$fila=mysqli_fetch_array($resultado2);
if ($fila[2] == $rut_usuario) {
	echo "<script>alert('Usuario registrado previamente')</script>";
}
else{
$query="INSERT INTO usuario (nombre_usuario,rut_usuario,correo_usuario,pw_usuario,telefono_usuario,rol_usuario) VALUES ('$nombre_usuario','$rut_usuario','$correo_usuario','$pw_usuario','$telefono_usuario','$rol_usuario')";
		$resultado=$conex->query($query);

		$query2="INSERT INTO asignacion(nombre_usuario,rut_usuario) VALUES ('$nombre_usuario','$rut_usuario')";
		$resultado3=$conex->query($query2);
}

?>

<center>	
			
			<?php if($resultado>0){ ?>
				<h1 class="form-control input-md">Usuario Guardado Correctamente</h1>
				<?php }else{ ?>
				<h1 class="form-control input-md">Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			
		</center>

		</html>