<?php
      include ('conexion.php');
    
      $id_usuario = $_GET['id_usuario'];
      $query = "SELECT * FROM usuario where id_usuario=$id_usuario";
      $resultado = mysqli_query($conex,$query);
      while ($fila = mysqli_fetch_array($resultado)) {     
        $id_usuario=$fila['id_usuario'];
        $rut_usuario=$fila['rut_usuario'];
         $nombre_usuario=$fila['nombre_usuario'];
       $correo_usuario=$fila['correo_usuario'];
$pw_usuario=$fila['pw_usuario'];
$rol_usuario=$fila['rol_usuario'];
$telefono_usuario=$fila['telefono_usuario'];
          
      }
      $datos=array("id_usuario"=>"$id_usuario","nombre_usuario"=>"$nombre_usuario","rut_usuario"=>"$rut_usuario","correo_usuario"=>"$correo_usuario",
        "pw_usuario"=>"$pw_usuario","rol_usuario"=>"$rol_usuario","telefono_usuario"=>"$telefono_usuario");

      echo json_encode($datos);
      
  ?>