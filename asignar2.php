<?php
      include ('conexion.php');
    
      $id_usuario = $_GET['id_usuario'];
      $query = "SELECT * FROM usuario where id_usuario=$id_usuario";
      $resultado = mysqli_query($conex,$query);
      while ($fila = mysqli_fetch_array($resultado)) {     
        $id_usuario=$fila['id_usuario'];
        $rut_usuario=$fila['rut_usuario'];
         $nombre_usuario=$fila['nombre_usuario'];
          $proyecto=$fila['proyecto'];
          $programa=$fila['programa'];
          $estado=$fila['estado'];
          
      }
      $datos=array("id_usuario"=>"$id_usuario","nombre_usuario"=>"$nombre_usuario","rut_usuario"=>"$rut_usuario","proyecto"=>"$proyecto","programa"=>"$programa","estado"=>"$estado");

      echo json_encode($datos);
      
  ?>