var noaceptados = /[¿?!¡#$"_%&()<>./=]/;
var control="";

$(document).on('keyup','#control', function(event){
 control = $(this).val();
 console.log(control);
 buscarElemento(control);
});

function buscarElemento(ncontrol) {
  $("#spinner").removeAttr("hidden");
  $("#spinner").show();
  $.ajax({
    url:"certificado_policial_back.php",
    method:"POST",
    datatype: "HTML",
    data:{ncontrol:ncontrol}
  })
  .done(function(respuesta){
    console.log(respuesta);
    $('#datos').html(respuesta);
    $("#spinner").hide();
  })
}
function agregarDatos() {
  document.getElementById('id');
  document.getElementById('id');
  document.getElementById('id');
  document.getElementById('id');
  document.getElementById('id');
  document.getElementById('id');
}

function limpiarDatos() {
  document.getElementById('control').value = "";

  $('#datos').html("");
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

function buscarRegistros(busqueda) {
var  numero = busqueda.value;
console.log(numero);
$.ajax({
  url: "certificado_policial_back.php",
  method:"POST",
  dataType:"HTML",
  data:{n_busqueda:numero}
})
.done(function(respuesta){
    $('#lista').html(respuesta);
})
}

function mayus(entrada) {
    entrada.value = entrada.value.toUpperCase();
    sanitizar(entrada);
}
