<?
$conex = new mysqli("localhost","root","root","honorarios"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
if (!$conex) {
die('Connect Error: '.mysqli_connect_error());
}


session_start();
 if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "index.php"
</script>';
}


//Validar si se está ingresando con sesión correctamente
$id_usuario = $_SESSION['id_usuario'];

        $consulta= "SELECT nombre_usuario,rol_usuario FROM usuario WHERE id_usuario='".$id_usuario."'"; 
$resultado= mysqli_query($conex,$consulta) or die (mysqli_error());
$fila=mysqli_fetch_array($resultado);
$rol=$fila['rol_usuario'];
$nombre_usuario=$fila['nombre_usuario'];

?>






<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Control de usuarios</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/orange-scheme.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">	
	<link rel="stylesheet" type="text/css" href="css/animaciones.css">
	
	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

</head>
<body >
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index2.php">Home</a></li>
            <li><a href="#">Portfolio</a>
            	<ul>
            		<li><a href="comprobante.html">Portfolio Grid</a></li>
            		<li><a href="project-image.html">Project Image</a></li>
            		<li><a href="project-slideshow.html">Project Slideshow</a></li>
            	</ul>
            </li>
            <li><a href="#">Blog</a>
				<ul>
					<li><a href="blog.html">Blog Standard</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="#">visit templatemo</a></li>
				</ul>
            </li>
            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="index.html">
							<img src="img/compite2.png" alt="Medigo by templatemo">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li class="active"><a href="index2.php">Home</a></li>
					            <li><a href="#">Documentación</a>
					            	<ul>
					            		<li><a href="comprobante.html">Comprobante de Pago</a></li>
					            		<li><a href="project-image.html">Ficha de Honorario</a></li>
					            		<li><a href="project-slideshow.html">Registro depositos</a></li>
					            		<li><a href="project-slideshow.html">Solicitud pago de honrarios</a></li>
					            		<li><a href="project-slideshow.html">planilla seguimiento reuniones</a></li>
					            	</ul>
					            </li>
					            <li><a href="#">Correo</a>
									
					            </li>
					            <li><a href="archives.html">Mantenedores</a>
									<ul>
									 <li><a href="project-slideshow.html">Usuarios</a></li>
									 </ul>
					            </li>
					             <li><a href="#">Proyectos</a>
                  <ul>
                   <li><a href="creacion_proyecto.php">Crear Proyecto</a></li>
                  
                   <li><a href="asignacion_proyecto.php">Asignar Proyecto</a></li>
                   </ul>
                      </li>
					              <li><a href="desconectar_usuario.php">Cerrar sesión</a>
								</li>
					           		         
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	</br></br></br>
<section class="centro">
</br>
</br>
</br>
  <img align= "right" src="img/u.png" alt="Medigo by templatemo">
	<center>
			
   <table width="742" border="0" bgcolor="#CCCCCC">
   <tr>
   <td width="600">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
      <td width="1000"><h1>Modulo Asignacion de proyectos</h1></td>
      
</tr>


<?php
	
	
	
	$id_usuario=$_GET['id_usuario'];
	
	 $consulta= "SELECT nombre_usuario,rut_usuario,programa,proyecto,estado FROM usuario WHERE id_usuario='".$id_usuario."'"; 
$resultado= mysqli_query($conex,$consulta) or die (mysqli_error());
$fila=mysqli_fetch_array($resultado);

$nombre_usuario=$fila['nombre_usuario'];
$rut_usuario=$fila['rut_usuario'];


 $query2="SELECT * FROM proyectos";
    $resultado2=$conex->query($query2);
         
 $combobit="";
    while ($row = $resultado2->fetch_array()) 
    {
        $combobit .="<option>".$row['nombre_proyecto']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
	
?>
<form method="POST"  >
  <table width="940" border="1" bgcolor="#CCCCCC">
  	 <tr>
    	
      <td width="84">ID </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" value="<?php echo $id_usuario; ?>" id="id_usuario" readonly></td>
      </tr>
    <tr>
    	
      <td width="84">Nombre completo </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" value="<?php echo $nombre_usuario; ?>"id="nombre_usuario" maxlength="50" required readonly /></td>    
    <tr>
    	<td width="84">Rut </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" value="<?php echo $rut_usuario; ?>" id="rut_usuario" maxlength="50" required readonly /></td>
    </tr>
     </tr>
      <tr>
      <td width="114">Proyecto</td>
      <td width="3">:</td>
      <td width="325"><select id="proyecto">
      <option>	<?echo $combobit;?></option>
      </select></td>
    </tr>
     <tr>
      <td width="84">Programa </td>
      <td width="3">:</td>
      <td width="159" ><select id="programa">
      	<option>EM-01</option>
      	<option>EM-02</option>
      	<option>EM-03</option>
      </select></td>
  </tr>
      <tr>
      <td width="114">Estado</td>
      <td width="3">:</td>
      <td width="325"><select id="estado">
      	<option>Desactivado</option>
      	<option>Activado</option>
      </select></td>
    </tr>
	<tr>
		<td> <input type="button" value="guardar" onclick="asignar();"></td>
	</tr>

    
  </table>
 </br>
</form>
</br>
  
    <br />
  <br />
  <br />
</center>
</section>


	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="blog.html">Blog Posts</a></li>
							<li><a href="archives.html">Shortcodes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">Copyright &copy; 2084 Company Name 
                    | Design: templatemo</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
		<script src="js/acciones.js"></script>
	<script src="js/validarut.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>

</body>
</html>