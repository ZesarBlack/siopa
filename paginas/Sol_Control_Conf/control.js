var curp="";
var noaceptados = /[¿?!¡#$"_%&()<>.=]/;

function mayus(entrada) {
    entrada.value = entrada.value.toUpperCase();
    sanitizar(entrada);
}

function sanitizar(texto) {
 if (noaceptados.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptados.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptados,'')
   }
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
}

$(document).on('keyup','#curp', function(event){
 curp = $(this).val();
 //alert(curp);
 buscarElemento(curp);
});

$.ajax({
  url:"control_conf_back.php?obtener=true",
  dataType:"html",
})
.done(function(respuesta){
  $("#lista").html(respuesta);
})

function buscarElemento(curp) {
  //alert(curp);
  $("#spinner").removeAttr("hidden");
  $("#spinner").show();
  $("#datos").html("");
  $.ajax({
		url: 'control_conf_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {curp:curp},
	})
	.done(function(respuesta){
		//alert(respuesta);
    $("#spinner").hide();
		$("#datos").html(respuesta);
		//var tipo = document.getElementById("dirigido").value;
		//alert(tipo);
	})
}

function buscarRegistros(busqueda) {
var  numero = busqueda.value;
//console.log(numero);
$.ajax({
  url: "control_conf_back.php",
  method:"POST",
  dataType:"HTML",
  data:{n_busqueda:numero}
})
.done(function(respuesta){
  console.log(respuesta);
    $('#lista').html(respuesta);
})
busqueda.value = busqueda.value.toUpperCase();
sanitizar(busqueda);
}
