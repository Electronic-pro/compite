<?
 require('conexion.php');


session_start();
 if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "index.php"
</script>';
}


//Validar si se está ingresando con sesión correctamente
$id_usuario = $_SESSION['id_usuario'];


?>

<!DOCTYPE html>
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
<br><br><br><br> <br><br>
	
<section class="centro">

 <center>
			
   <table width="742" border="0" bgcolor="#CCCCCC">
   <tr>
   <td width="600">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
      <td width="1000"><h1>Modulo Usuarios</h1></td>
      
</tr>
<form method="POST" name="form1" onSubmit="javascript:return Rut(document.form1.rut_usuario.value)" action="guardar_usuario.php">
  <table width="940" border="1" bgcolor="#CCCCCC">
    <tr>
      <td width="84">Nombre completo </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" name="nombre_usuario" maxlength="50" required /></td>
      
      <td width="114">Rut</td>
      <td width="3">:</td>
      <td width="325"><input type="text" name="rut_usuario" maxlength="12"  required /></td>
    </tr>
     <tr>
      <td width="84">Correo </td>
      <td width="3">:</td>
      <td width="159" ><input type="email" name="correo_usuario"  maxlength="45" required/></td>
      
      <td width="114">Contraseña</td>
      <td width="3">:</td>
      <td width="325"><input type="password" name="pw_usuario" maxlength="45"  required /></td>
    </tr>
       <tr>
      <td width="84">Telefono </td>
      <td width="3">:</td>
      <td width="159" ><input type="number" name="telefono_usuario" min="0" max="999999999" required /></td>
      
      <td width="114">Rol</td>
      <td width="3">:</td>
      <td width="325"><select name="rol_usuario">
        <option>Ingeniero</option>
        <option>Tutor</option>
        <option>Profesor</option>
      </select></td>
    </tr>


    
  </table>
<div class="users">
 </br>
  <table width="742" border="0" bgcolor="#CCCCCC">
 <? 
    $query="SELECT *  FROM usuario where rol_usuario!='Admin'";

    $resultado=$conex->query($query);
    
?>
    <tr>
      <td width="100" bgcolor="#CCCCCC">&nbsp;ID</td>
      <td width="144" bgcolor="#CCCCCC">&nbsp;Nombre Completo</td>
      <td width="144" bgcolor="#CCCCCC">&nbsp;E-mail</td>
      <td width="144" bgcolor="#CCCCCC">&nbsp;Rut</td>
      <td width="144" bgcolor="#CCCCCC">&nbsp;Telefono</td>
      <td width="140" bgcolor="#CCCCCC">&nbsp;Rol</td>
      <td width="140" bgcolor="#CCCCCC">&nbsp;Opciones</td>
    </tr>
    <tr>
      <?php while($row=$resultado->fetch_assoc()){ ?>
      <td><input type="text"  value="<?php echo $row['id_usuario'];?>"   readonly/></td>
      <td><input type="text"  value="<?php echo $row['nombre_usuario'];?>"   readonly/></td>
      <td><input type="text"  value="<?php echo $row['correo_usuario'];?>"   readonly/></td>
       <td><input type="text"  value="<?php echo $row['rut_usuario'];?>"   readonly/></td>
      <td><input type="text"  value="<?php echo $row['telefono_usuario'];?>"   readonly/></td>
      <td><input type="text"  value="<?php echo $row['rol_usuario'];?>"   readonly/></td>
      <td><a href="eliminar.php?id_usuario=<?php echo $row['id_usuario'];?>">Eliminar </a></td>
       <td> <input  type="button" onClick="rellenarModal2('<?php echo $row['id_usuario']; ?>');"data-toggle="modal" data-target="#modal2" value="Modificar"> </td>
    </tr>
    <?php } ?>

    <td>
    </br>
    </td>
    <tr>
      <td>&nbsp;</td>
      
      <td>
        <input type="submit" name="Submit" value="Agregar" />
        
      </td>
      <td>&nbsp;</td>
    </tr>
</table>
</div>
</form>


</br>
  
    <br />
  <br />
  <br />
</center>
</section>
<!-- Modal -->
<div id="modal2" class="modal fade" role="dialog">
	<br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Usuario:</h4>
      </div>
      <div class="modal-body">
 <form method="POST" onSubmit="modUsuario();" >

<table width="9" border="1" bgcolor="#CCCCCC">
     <tr>
      
      <td width="84">ID </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" value="" name="id_usuario2"  id="id_usuario2" required readonly ></td>
      </tr>
      <tr>
      <td width="84">Nombre completo </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" value="" name="nombre_usuario2"  id="nombre_usuario2"  maxlength="50" /></td> 
      </tr> 
        <tr>
      <td width="84">Email </td>
      <td width="3">:</td>
      <td width="159" ><input type="email" value=""name="correo_usuario2"  id="correo_usuario2" maxlength="50"   /></td> 
      </tr>   
   <tr>
      <td width="84">Rut </td>
      <td width="3">:</td>
      <td width="159" ><input type="text"value="" name="rut_usuario2"  id="rut_usuario2"  maxlength="50" required readonly /></td>
    </tr> 
      <tr>
      <td width="84">Password </td>
      <td width="3">:</td>
      <td width="159" ><input type="password"value="" name="pw_usuario2" id="pw_usuario2"  maxlength="50" required  /></td>
    </tr>
        <tr>
      <td width="84">Numero </td>
      <td width="3">:</td>
      <td width="159" ><input type="number" name="telefono_usuario2" id="telefono_usuario2" min="0" max="999999999"  required  /></td>
    </tr>

      <tr>
       <td width="114">Rol</td>
      <td width="3">:</td>
      <td width="325"><select name="rol_usuario2" id="rol_usuario2" >
        <option>Ingeniero</option>
        <option>Tutor</option>
        <option>Profesor</option>
      </select></td>	
    </tr>
  <tr>
    <td> <input type="submit"></td>
  </tr>
  </table>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>

<!-- Modal -->


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
	<script src="js/validarut.js"></script>
	<script src="js/acciones.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Modal -->
<div id="modal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Usuario:</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
</body>
</html>