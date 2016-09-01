<!DOCTYPE html>
<html lang="en">
<head>
     <meta http-equiv="Refresh" content="2;index2.php">

		<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="author" type="text/plain" href="humans.txt">
	<link rel="sitemap" type="application/xml" href="sitemap.xml">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">	
	<link rel="stylesheet" type="text/css" href="css/animaciones.css">
</head><!--/head-->

<?php 
$conex = mysqli_connect("localhost", "root", "")
        or die("No se pudo realizar la conexion");
    mysqli_select_db($conex,"honorarios")
        or die("ERROR con la base de datos");



$nombre_usuario=$_POST['nombre_usuario'];
$rut_usuario=$_POST['rut_usuario'];
$correo_usuario=$_POST['correo_usuario'];
$pw_usuario=$_POST['pw_usuario'];
$telefono_usuario=$_POST['telefono_usuario'];
$rol_usuario=$_POST['rol_usuario'];



$query="INSERT INTO usuario (nombre_usuario,rut_usuario,correo_usuario,pw_usuario,telefono_usuario,rol_usuario) VALUES ('$nombre_usuario','$rut_usuario','$correo_usuario','$pw_usuario','$telefono_usuario','$rol_usuario')";
		$resultado=$conex->query($query);


?>

<center>	
			
			<?php if($resultado>0){ ?>
				<h1 class="form-control input-md">Usuario guardado correctamente  redireccionando</h1>
				<?php }else{ ?>
				<h1 class="form-control input-md">Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			
		</center>

		</html>