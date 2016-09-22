<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Solicitud de pago</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script type="text/javascript">
    $(document).ready(function(){
        /**
         * Funcion para añadir una nueva columna en la tabla
         */
        $("#add").click(function(){
            // Obtenemos el numero de filas (td) que tiene la primera columna
            // (tr) del id "tabla"
            var tds=$("#tabla tr:first td").length;
            // Obtenemos el total de columnas (tr) del id "tabla"
            var trs=$("#tabla tr").length;
            var nuevaFila="<tr>";
            for(var i=0;i<tds;i++){
                // añadimos las columnas
                nuevaFila+="<td><input type='text' id="+(i+1)+" value="+(i+1)+"></td>";
            }
            // Añadimos una columna con el numero total de columnas.
            // Añadimos uno al total, ya que cuando cargamos los valores para la
            // columna, todavia no esta añadida
            nuevaFila+="</tr>";
            $("#tabla").append(nuevaFila);
        });
 
        /**
         * Funcion para eliminar la ultima columna de la tabla.
         * Si unicamente queda una columna, esta no sera eliminada
         */
        $("#del").click(function(){
            // Obtenemos el total de columnas (tr) del id "tabla"
            var trs=$("#tabla tr").length;
            if(trs>1)
            {
                // Eliminamos la ultima columna
                $("#tabla tr:last").remove();
            }
        });
    });
    </script>
</head>

<body>
<p align="center"><strong>Solicitud de Pado de honorarios<br></strong></p>
<form class="deposito" id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="1069" border="0">
      <tr>
        <td>Atencion</td>
        <td>:</td>
        <td><label for="textfield">
          <input type="text" name="textfield3" id="textfield3" />
        </label></td>
        <td>Cargo</td>
        <td>:</td>
        <td><input type="text" name="textfield" id="textfield" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Enviado Por:</td>
        <td>:</td>
        <td><input type="text" name="textfield2" id="textfield2" /></td>
        <td>Cargo</td>
        <td>:</td>
        <td><input type="text" name="textfield4" id="textfield4" /></td>
        <td>Fecha</td>
        <td>:</td>
        <td><input type="date" required /></td>
      </tr>
    </table> 
    <table  id="tabla" width="200" border="1">
      <tr>
        <td>Nº</td>
        <td>RUT.</td>
        <td>Nombre y Apellido</td>
        <td>Nº Boleta</td>
        <td>Monto</td>
        <td>Motivo de Pago</td>
        <td>Forma de Pago</td>
      </tr>
    
    </table>
  </div>
  <p align="center">
    <br>
    <br>
    <input class="boton" type="button" name="button" id="add" value="Agregar" />
    <input class="boton" type="button" name="button2" id="del" value="Eliminar" />
    <input class="boton" type="submit" name="button3" id="button3" value="Cancelar" />
    <input class="boton" type="submit" name="button4" id="button4" value="Cerrar" />
  </p>

</form>
</body>
</html>
