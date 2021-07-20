var curp="";

$(document).on('keyup','#nombre', function(event){
 nombre = $(this).val();
 //alert(curp);
 buscarElemento(nombre);
});

$.ajax({
  url:"control_conf_back.php?obtener=true",
  dataType:"html",
})
.done(function(respuesta){
  $("#lista").html(respuesta);
})

function buscarElemento(nombre) {
  //alert(curp);
  $.ajax({
		url: 'control_conf_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {nombre:nombre},
	})
	.done(function(respuesta){
		//alert(respuesta);
		$("#datos").html(respuesta);
		//var tipo = document.getElementById("dirigido").value;
		//alert(tipo);

	})
}
