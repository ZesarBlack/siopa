function buscar_datos(catalogo){
	//alert(catalogo);
	$.ajax({
		url: 'catalogo_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {catalogo: catalogo},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}
