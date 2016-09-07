  function guardarProyecto(creacion_proyecto){



    var codigo_proyecto= document.getElementById('codigo_proyecto').value;
    var nombre_proyecto= document.getElementById('nombre_proyecto').value;
    var inicio_proyecto= document.getElementById('inicio_proyecto').value;
    var termino_proyecto= document.getElementById('termino_proyecto').value;
   var ciudad_proyecto = $("#ciudad_proyecto").val();

$.ajax({
  data: {codigo_proyecto:codigo_proyecto,  
  		 nombre_proyecto:nombre_proyecto, 
  		 inicio_proyecto:inicio_proyecto,
  		 termino_proyecto:termino_proyecto,
  		 ciudad_proyecto:ciudad_proyecto         
           },
  url: 'guardar_proyecto.php',
  type: 'POST',
  
})
.done(function() {
	$('#tabla').load(creacion_proyecto);
})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

alert('Se han guardado los cambios');
    


}

function asignar(){
   var nombre_usuario= document.getElementById('nombre_usuario').value;
   
   var programa = $("#programa").val();
   var  proyectos = $("#proyectos").val();
   var estado = $("#estado").val();

$.ajax({
  data: {
    nombre_usuario:nombre_usuario,  
       programa:programa, 
       proyectos:proyectos,
       estado:estado        
           },
  url: 'asignar.php',
  type: 'POST',
  
})
.done(function() {
alert('Se ha asignado el proyecto al usuario correctamente ');
})
.fail(function() {
  console.log("error");
})
.always(function() {
  console.log("complete");
});


    

}



	