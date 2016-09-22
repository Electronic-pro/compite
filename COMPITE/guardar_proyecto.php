<?php 
$conex = mysqli_connect("localhost", "bax", "bax")
        or die("No se pudo realizar la conexion");
    mysqli_select_db($conex,"honorarios")
        or die("ERROR con la base de datos");



$codigo_proyecto=$_POST['codigo_proyecto'];
$nombre_proyecto=$_POST['nombre_proyecto'];
$inicio_proyecto=$_POST['inicio_proyecto'];
$termino_proyecto=$_POST['termino_proyecto'];
$ciudad_proyecto=$_POST['ciudad_proyecto'];



$consulta= "SELECT * FROM proyectos WHERE nombre_proyecto='".$nombre_proyecto."'"; 
$resultado2= mysqli_query($conex,$consulta) or die (mysqli_error());
$fila=mysqli_fetch_array($resultado2);
if ($fila[1] == $nombre_proyecto) {
	echo "<script>alert('Proyecto registrado previamente');</script>";
}
else {
$query="INSERT INTO proyectos (codigo_proyecto,nombre_proyecto,inicio_proyecto,termino_proyecto,ciudad_proyecto) VALUES ('$codigo_proyecto','$nombre_proyecto','$inicio_proyecto','$termino_proyecto','$ciudad_proyecto')";
		$resultado=$conex->query($query);
}
?>