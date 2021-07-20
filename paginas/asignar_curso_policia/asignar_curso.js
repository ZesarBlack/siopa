var nombre="";
var curso ="";
$(document).on('keyup','#cuip', function(event){
 cuip = $(this).val();
 console.log(cuip);
 buscar_datos(cuip);
});

function buscar_datos(cuip){
   console.log(cuip);
	$.ajax({
		url: 'asignar_curso_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {cuip:cuip},
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
