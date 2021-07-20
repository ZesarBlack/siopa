var noaceptados = /[¿?!¡#$"_%&()<>./=]/;
var correccion="";
var control="";
var cargo="";
var tiposan="";
var tipoco="";
var motivo="";
var horas="";
var autoridad="";
var fechaper="";

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
    url:"regimen_back.php",
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
    url: "regimen_back.php",
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
  url: "regimen_back.php",
  method:"POST",
  dataType:"HTML",
  data:{n_busqueda:numero}
})
.done(function(respuesta){
    $('#datos_capacitacion').html(respuesta);
})
}

$(document).ready(function(){
  $("#tiposan").change(function(event){
    tiposan = $(this).val();
    console.log(tiposan);
    if (tiposan == "Corrección disciplinaria") {
      $("#correccion").removeAttr("hidden");
      $("#correccion").show();
    }else {
      $("#correccion").hide();
    }
  })
});

$(document).ready(function(){
  $("#tipoco").change(function(event){
    tipoco = $(this).val();
    console.log(tipoco);
    if (tipoco == "Arresto") {
      $("#horasa").removeAttr("hidden");
      $("#horasa").show();
    }else {
      $("#horasa").hide();
    }
  })
});


function registrarProcadmin() {

control  = document.getElementById('control').value;
cargo  = document.getElementById('cargo').value;
tiposan  = document.getElementById('tiposan').value;
tipoco  = document.getElementById('tipoco').value;
motivo  = document.getElementById('motivo').value;
autoridad  = document.getElementById('autoridad').value;
fechaper  = document.getElementById('fechaper').value;

if (tiposan == "Corrección disciplinaria") {
  tiposan = tipoco;
}
if (tipoco  == "Arresto") {
  horas  = document.getElementById('horas').value;
}else {
  horas = "No fue arresto"
}


  $.ajax({
    url: "regimen_back.php",
    method:"POST",
    dataType:"HTML",
    data:{id:control, cargo:cargo, tiposan:tiposan, motivo:motivo, horas:horas, autoridad:autoridad, fechaper:fechaper}
  })
  .done(function (respuesta) {
    console.log(respuesta);
  });
  setTimeout(function(){ location.reload()}, 1000);

}
