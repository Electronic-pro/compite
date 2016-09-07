<head>
	 <meta http-equiv="Refresh" content="1;creacion_proyecto.php">
	 <script type="text/javascript">
	 	alert('se a eliminado el proyecto correctamente');
	 </script>
</head>

<?
require('conexion.php');



$codigo_proyecto=$_GET['codigo_proyecto'];
	
	$query="DELETE FROM proyectos WHERE codigo_proyecto='$codigo_proyecto'";
	
	$resultado=$conex->query($query);
	

	
?>
