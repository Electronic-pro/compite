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

        $consulta= "SELECT nombre_usuario,correo_usuario,rol_usuario,programa,proyecto FROM usuario WHERE id_usuario='".$id_usuario."'"; 
$resultado= mysqli_query($conex,$consulta) or die (mysqli_error());
$fila=mysqli_fetch_array($resultado);
$rol=$fila['rol_usuario'];
$nombre_usuario=$fila['nombre_usuario'];
$correo_usuario=$fila['correo_usuario'];
$rol_usuario=$fila['rol_usuario'];
$programa=$fila['programa'];
$proyecto=$fila['proyecto'];

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home proyectos:<?echo $correo_usuario;?></title>
 <link rel="stylesheet" type="text/css" href="css/css.css">

  <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/misc.css">
  <link rel="stylesheet" href="css/orange-scheme.css">
  
  
  <!-- JavaScripts -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>

  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
</head>

 <header class="site-header clearfix">
    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div class="pull-left logo">
            <a href="index.php">
              <img src="img/compite2.png" alt="Medigo by templatemo">
            </a>
          </div>  <!-- /.logo -->

          <div class="main-navigation pull-right">

            <nav class="main-nav visible-md visible-lg">
              <ul class="sf-menu">
                <li class="active"><a href="tutores.php">Home</a></li>
                  
                      </li>
                         <li><a href="#">Proyectos</a>
               
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
  <br>
  <br>
<body>
<form align="center" class="usuario" id="form1" name="form1" method="post" action="">
  
  <p>detalle de mes</p>
  <br>
  <p>Nombre de proyecto: <?echo $proyecto;?></p>
   <p>Nombre programa: <?echo $programa;?> </p>
  <p>Cantidad de boletas: cantidad de boletas</p>
  <p>Cantidad de tutorias realizadas: cantidad de tutorias</p>
  <br>
  <p>Boletas 
    <input class="boton" type="submit" name="button" id="button" value="agregar " />
    <input class="boton" type="submit" name="button2" id="button2" value="Ver boletas" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
</form>

<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="footer-nav clearfix">
            <ul class="footer-menu">
              <li><a href="index.html">Home</a></li>
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
</body>
</html>
