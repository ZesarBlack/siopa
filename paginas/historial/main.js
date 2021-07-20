function buscar_datos(curso){
	//alert(nombre);
	//alert(curso);
	$.ajax({
		url: 'historial_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {curso:curso, function:"ok"},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}

function buscarCursos(id)
{
	$.ajax({
		url:"historial_back.php",
		type:"POST",
		dataType:"html",
		data:{function:''},
	});
}
