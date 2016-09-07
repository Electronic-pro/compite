<?
session_start();

session_unset();

if ($_SESSION['correo_usuario'])
{	
	session_destroy();
	}
	
?><script language = javascript>
	alert("su sesion ha terminado correctamente")
	self.location = "index.php"
	</script>