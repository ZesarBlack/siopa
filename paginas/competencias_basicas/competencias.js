var noaceptados = /[¿?!¡#$"_%&()<>./=]/;

var control = "";
var fecha = "";
var resultado = "";
var instancia = "";
var num = 0;

$(document).on('keyup','#control', function(event){
 control = $(this).val();
 console.log(control);
 buscar_datos(control);
});


function buscar_datos(n_control) {
  //console.log(n_control);
  $("#spinner").removeAttr("hidden");
  $("#spinner").show();
  $.ajax({
    url:"competencias_back.php",
    method:"POST",
    dataType:"HTML",
    data:{control:n_control}
  })
  .done(function(respuesta){
    console.log(respuesta);
    $('#datos').html(respuesta);
    $("#spinner").hide();
  })
}

function limpiarDatos() {
  document.getElementById('control').value = "";
  document.getElementById('fecha').value = "";
  document.getElementById('resultado').value = "";
  document.getElementById('instancia').value = "";
  $('#datos').html("");
}

function agregarRegistrocom() {
  control =  document.getElementById('control').value;
  fecha =  document.getElementById('fecha').value;
  resultado =  document.getElementById('resultado').value;
  instancia =  document.getElementById('instancia').value;
  //console.log(control+"-"+fecha+"-"+resultado+"-"+instancia);
  if (control == "" || fecha == "" || resultado == "" ||instancia == "") {
    alert("Todos campos deben estar completos");
  }else {
    $.ajax({
      url:"competencias_back.php",
      method:"POST",
      dataType:"html",
      data:{control:control, fecha:fecha, resultado:resultado, instancia:instancia}
    })
    .done(function(respuesta) {
      console.log(respuesta);
    })
    setTimeout(function(){ location.reload()}, 1000);
  }
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

function mayus(entrada) {
    entrada.value = entrada.value.toUpperCase();
    sanitizar(entrada);
}

function buscarRegistros(busqueda) {
var  numero = busqueda.value;
//console.log(numero);
$.ajax({
  url: "competencias_back.php",
  method:"POST",
  dataType:"HTML",
  data:{n_busqueda:numero}
})
.done(function(respuesta){
  console.log(respuesta);
    $('#lista').html(respuesta);
})
}
/*
function sumaVar() {
  console.log(num);
  num = num+1;
  $.ajax({
    url:"competencias_back.php",
    method
    dataType:"HTML"
  })
}
*/
//setInterval('sumaVar()',1000);
