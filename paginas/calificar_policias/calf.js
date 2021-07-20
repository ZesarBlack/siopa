
function buscar_datos(curso){
	//alert(nombre);
	//alert(curso);
	$.ajax({
		url: 'asignar_calf_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {curso:curso},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}
//document.getElementById("darBaja").onclick = function() {alert("HOLA")};
