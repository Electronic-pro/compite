

<?php 
$conex = mysqli_connect("localhost", "root", "root")
        or die("No se pudo realizar la conexion");
    mysqli_select_db($conex,"honorarios")
        or die("ERROR con la base de datos");

$id_usuario=$_POST['id_usuario'];
$nombre_usuario=$_POST['nombre_usuario'];
$rut_usuario=$_POST['rut_usuario'];
$programa=$_POST['programa'];
$proyecto=$_POST['proyecto'];
$estado=$_POST['estado'];




$query="UPDATE  usuario SET nombre_usuario='$nombre_usuario',rut_usuario='$rut_usuario',programa='$programa',proyecto='$proyecto',estado='$estado' WHERE id_usuario='$id_usuario'";
		$resultado=$conex->query($query);

		
?>

