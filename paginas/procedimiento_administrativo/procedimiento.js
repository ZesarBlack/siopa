var noaceptados = /[¿?!¡#$"_%&()<>./=]/;
var control="";
var numex  = "";
var motivo  = "";
var resolucion  = "";
var fseparacion  = "";
var periodo  = "";
var instancia  = "";

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
    url:"procedimiento_back.php",
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


function actualizarDatos() {
  control = document.getElementById('control').value;
  nombre_curso = document.getElementById('nombre_curso').value;
  horas = document.getElementById('horas').value;
  p_inicio = document.getElementById('p_inicio').value;
  p_fin = document.getElementById('p_fin').value;
  instancia = document.getElementById('instancia').value;
  n_documento = document.getElementById('n_documento').value;
  documento = document.querySelector("#documento");

  $.ajax({
    url: "procedimiento_back.php",
    method:"POST",
    dataType:"HTML",
    data:{id:control, nombre_curso:nombre_curso, horas:horas, p_inicio:p_inicio, p_fin:p_fin, instancia:instancia, n_documento:n_documento, documento: documento.files[0]}
  })
  .done(function (respuesta) {
    console.log(respuesta);
  });

  //console.log(control+ " - " +  nombre_curso+ " - " +  horas+ " - " +  p_inicio+ " - "+p_fin+" - "+instancia+" - " +documento);
}

function limpiarDatos() {
  document.getElementById('control').value = "";
  document.getElementById('nombre_curso').value = "";
  document.getElementById('horas').value = "";
  document.getElementById('p_inicio').value = "";
  document.getElementById('p_fin').value = "";
  document.getElementById('instancia').value = "";
  document.getElementById('n_documento').value = "";
  document.getElementById('documento').value = "";
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

function mayus(entrada) {
    entrada.value = entrada.value.toUpperCase();
    sanitizar(entrada);
}

function buscarRegistros(busqueda) {
var  numero = busqueda.value;
console.log(numero);
$.ajax({
  url: "procedimiento_back.php",
  method:"POST",
  dataType:"HTML",
  data:{n_busqueda:numero}
})
.done(function(respuesta){
    $('#datos_capacitacion').html(respuesta);
})
}

$(document).ready(function(){
  $("#estimulo").change(function(event){
    estimulo = $(this).val();
    console.log(estimulo);
    if (estimulo == "Condecoración") {
      $("#tip_merito").removeAttr("hidden");
      $("#tip_merito").show();
    }else {
      $("#tip_merito").hide();
    }
  })
});

function registrarProcadmin() {

  control = document.getElementById('control').value;
  numex = document.getElementById('numex').value;
  motivo = document.getElementById('motivo').value;
  resolucion = document.getElementById('resolucion').value;
  fseparacion = document.getElementById('fseparacion').value;
  periodo = document.getElementById('periodo').value;
  instancia = document.getElementById('instancia').value;

  $.ajax({
    url: "procedimiento_back.php",
    method:"POST",
    dataType:"HTML",
    data:{id:control, numex:numex, motivo:motivo,  resolucion:resolucion,  fseparacion:fseparacion,  periodo:periodo,  instancia:instancia}
  })
  .done(function (respuesta) {
    console.log(respuesta);
  });
  setTimeout(function(){ location.reload()}, 1000);

}
