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


?>



<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Asignacion de Proyecto</title>
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
  <link rel="stylesheet" href="css/estilo.css">
  
  <!-- JavaScripts -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>

  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

</head>

<body>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Portfolio</a>
              <ul>
                <li><a href="portfolio.html">Portfolio Grid</a></li>
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
            <a href="index.php">
              <img src="img/compite2.png" alt="Medigo by templatemo">
            </a>
          </div>  <!-- /.logo -->

          <div class="main-navigation pull-right">

            <nav class="main-nav visible-md visible-lg">
              <ul class="sf-menu">
                <li class="active"><a href="index2.php">Home</a></li>
                      <li><a href="#">Documentación</a>
                        <ul>
                          <li><a href="comprobante.html">Comprobante de Pago</a></li>
                          <li><a href="project-image.html">Ficha de Honorario</a></li>
                          <li><a href="project-slideshow.html">Registro depositos</a></li>
                          <li><a href="solicitud_pago.php">Solicitud pago de honrarios</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Correo</a>
                  
                      </li>
                      <li><a href="archives.html">Mantenedores</a>
                  <ul>
                   <li><a href="usuarios.php">Usuarios</a></li>
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




<div class="asignacion" >
  <h1>Asignacion de Proyecto</h1>
       <?php
        
   require('conexion.php');
    
    $query="SELECT *  FROM usuario where rol_usuario!='Admin' ";

    $resultado=$conex->query($query);

 $query2="SELECT * FROM proyectos";
    $resultado2=$conex->query($query2);
         
 $combobit="";
    while ($row = $resultado2->fetch_array()) 
    {
        $combobit .="<option>".$row['nombre_proyecto']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
   
    
?>


  



  <p align="center">
    <label for="textfield2"></label>
    
  Buscardor:
  <input type="text" name="textfield" id="textfield2" />
  <input type="button" name="button5" id="button5" value="Buscar " />
  </p>



  <table width="300" border="1" align="center">
    <tr>
      <td width="141" bgcolor="#999999"><strong>ID</strong></td>
      <td width="141" bgcolor="#999999"><strong>Nombre</strong></td>
      <td width="144" bgcolor="#999999"><strong>Rut</strong></td>
      <td width="144" bgcolor="#999999"><strong>Programa</strong></td>
      <td width="147" bgcolor="#999999"><strong>Proyectos</strong></td>
      <td width="147" bgcolor="#999999"><strong>Estado</strong></td>
      <td width="147" bgcolor="#999999"><strong>Opciones</strong></td>
    </tr>
    <?php while($row=$resultado->fetch_assoc()){ ?>
    <tr>
      
  <td>
      <input type="text"   value="<?php echo $row['id_usuario'];?>"  readonly/>
  </td>
      <td>
      <input type="text"   value="<?php echo $row['nombre_usuario'];?>"   readonly/>
      </td>
         <td>
      <input type="text"   value="<?php echo $row['rut_usuario'];?>"  readonly/>
      </td>
       <td>
        
      <input type="text"   value="<?php echo $row['programa'];?>"  readonly/>
      </td>
       <td>
        
      <input type="text"   value="<?php echo $row['proyecto'];?>"  readonly/>
      </td>
      <td>
        
      <input type="text"   value="<?php echo $row['estado'];?>"   readonly/>
      </td>
    <td>
   <input  type="button" onClick="rellenarModal('<?php echo $row['id_usuario']; ?>');" data-toggle="modal" data-target="#modal" value="asignar"> 
    </td>
    </tr>
    <?php }   ?>

  </table>
  <p></p>
  <table width="200" border="0" align="center">
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    
</div>
<!-- Modal -->
<div id="modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Usuario:</h4>
      </div>
      <div class="modal-body">
        <?php
  
  
  

 $query2="SELECT * FROM proyectos";
    $resultado2=$conex->query($query2);
         
 $combobit="";
    while ($row = $resultado2->fetch_array()) 
    {
        $combobit .="<option>".$row['nombre_proyecto']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
  
?>
 <form method="POST"  onSubmit="asignar();">

<table width="940" border="1" bgcolor="#CCCCCC">
     <tr>
      
      <td width="84">ID </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" name="id_usuario" value="" id="id_usuario" required readonly ></td>
      </tr>
      <tr>
      <td width="84">Nombre completo </td>
      <td width="3">:</td>
      <td width="159" ><input type="text" value=""name="nombre_usuario" id="nombre_usuario" maxlength="50" required readonly /></td> 
      </tr>   
   <tr>
      <td width="84">Rut </td>
      <td width="3">:</td>
      <td width="159" ><input type="text"value="" id="rut_usuario"name="rut_usuario" maxlength="50" required readonly /></td>
    </tr>
     
      <tr>
      <td width="114">Proyecto</td>
      <td width="3">:</td>
      <td width="325"><select name="proyecto" id="proyecto">
      <option>  <?echo $combobit;?></option>
      </select></td>
    </tr>
  <tr>
      <td width="84">Programa </td>
      <td width="3">:</td>
      <td width="159" ><select name="programa" id="programa">
        <option>EM-01</option>
        <option>EM-02</option>
        <option>EM-03</option>
      </select></td>
  </tr>
      <tr>
      <td width="114">Estado</td>
      <td width="3">:</td>
      <td width="325"><select name="estado" id="estado">
        <option>Desactivado</option>
        <option>Activado</option>
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
<!-- Modal -->
<!-- Modal -->
    <!-- Modal content-->





  <!-- Scripts -->
  <script src="js/acciones.js"></script>
  <script src="js/min/plugins.min.js"></script>
  <script src="js/min/medigo-custom.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>



