function buscar_datos(nombre, fecha, tipo){
	//alert(tipo);
	$.ajax({
		url: 'bitacora_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {nombre: nombre, fecha: fecha, tipo: tipo },
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}
