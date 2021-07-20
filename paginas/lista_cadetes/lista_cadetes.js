var tipo="";
var busqueda="";
var id_temp="";
var tipo_r="";

$(document).ready(function(){
	busqueda_cadetes(tipo, "Genero");
  $("#tipo").change(function(event){
     tipo = $(this).val();
     //alert(tipo);
      busqueda_cadetes(tipo, busqueda);
  })
});

$(document).on('keyup','#busqueda', function(event){
	busqueda = $(this).val();
  busqueda_cadetes(tipo, busqueda);
});

function busqueda_cadetes(tipo, busqueda){
	//alert(tipo);
	$.ajax({
		url: 'lista_cadetes_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {tipo: tipo, busqueda: busqueda},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}

function invalidar() {
  //alert(id);
	observaciones = $('#observaciones').val();
	alert(observaciones);
	alert(id_temp);
  $.ajax({
		url: 'lista_cadetes_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {id: id_temp, observaciones :observaciones},
	})
  .done(function(respuesta){
		$("#query").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}

function setId(id) {
	id_temp = id;
	alert(id_temp);
}

function tipoReporte(tipor) {
console.log(tipor);

$.ajax({
	type:"POST",
	url:"lista_cadetes_back.php",
	dataType:"HTML",
	data:{"tipor": tipor}
})
.done(function(respuesta){
	console.log(respuesta);
})

}



$(document).ready(function(){
	tipo_r = $('#tbusqueda').val();
	tipoReporte(tipo_r);
  $("#tbusqueda").change(function(event){
     tipo_r = $(this).val();
     //alert(tipo);
		  tipoReporte(tipo_r);
  })
});
