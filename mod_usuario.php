<?php 
$conex = mysqli_connect("localhost", "root", "root")
        or die("No se pudo realizar la conexion");
    mysqli_select_db($conex,"honorarios")
        or die("ERROR con la base de datos");

$id_usuario2=$_POST['id_usuario2'];
$nombre_usuario2=$_POST['nombre_usuario2'];
$rut_usuario2=$_POST['rut_usuario2'];
$correo_usuario2=$_POST['correo_usuario2'];
$pw_usuario2=$_POST['pw_usuario2'];
$rol_usuario2=$_POST['rol_usuario2'];
$telefono_usuario2=$_POST['telefono_usuario2'];






$query="UPDATE  usuario SET nombre_usuario='$nombre_usuario2',rut_usuario='$rut_usuario2',correo_usuario='$correo_usuario2',pw_usuario='$pw_usuario2',rol_usuario='$rol_usuario2',telefono_usuario ='$telefono_usuario2' WHERE id_usuario='$id_usuario2'";
		$resultado=$conex->query($query);

		
?>