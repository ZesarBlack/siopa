var nombre="";
var curso ="";
$(document).on('keyup','#nombre', function(event){
 nombre = $(this).val();
 enviar(nombre,curso);
});
$(document).on('keyup','#curso', function(event){
 curso = $(this).val();
 enviar(nombre, curso);
});

function enviar(nombre, curso){
	 buscar_datos(nombre, curso);
}

function buscar_datos(nombre, curso){
	$.ajax({
		url: 'asignar_curso_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {nombre: nombre, curso:curso},
	})
	.done(function(respuesta){
		//alert(respuesta);
		$("#datos").html(respuesta);
		//var tipo = document.getElementById("dirigido").value;
		//alert(tipo);

	})
	.fail(function(){
		console.log("error");
	});
}
