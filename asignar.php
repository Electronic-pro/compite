

<?php 
$conex = mysqli_connect("localhost", "root", "root")
        or die("No se pudo realizar la conexion");
    mysqli_select_db($conex,"honorarios")
        or die("ERROR con la base de datos");



$nombre_usuario=$_POST['nombre_usuario'];
$programa=$_POST['programa'];
$proyectos=$_POST['proyectos'];
$estado=$_POST['estado'];




$query="INSERT INTO asignacion(id,nombre_usuario,programa,proyecto,estado) VALUES ('$id','$nombre_usuario','$programa','$proyectos','$estado')";
		$resultado=$conex->query($query);


?>

