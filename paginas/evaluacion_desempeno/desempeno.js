var noaceptados = /[¿?!¡#$"_%&()<>./=]/;
var control = "";

$(document).on('keyup','#control', function(event){
 control = $(this).val();
 //console.log(control);
 buscar_datos(control);
});

function buscar_datos(n_control){
  console.log(n_control);
  $("#spinner").removeAttr("hidden");
  $("#spinner").show();
  $.ajax({
    url:"desempeno_back.php",
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
  document.getElementById('perfil').value = "";
  document.getElementById('fecha').value = "";
  document.getElementById('instancia').value = "";
  document.getElementById('resultado').value = "";
  $('#datos').html("");
}

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

function agregarRegistrodesem() {
  n_control = document.getElementById('control').value;
  perfil = document.getElementById('perfil').value;
  fecha = document.getElementById('fecha').value;
  instancia = document.getElementById('instancia').value;
  resultado = document.getElementById('resultado').value;
  if (n_control == "" || perfil == "" || fecha == "" || instancia == "" || resultado == "") {
    alert("Tolos los campos deben estar completos");
  }else {
    $.ajax({
      url:"desempeno_back.php",
      method:"POST",
      dataType:"HTML",
      data:{control:n_control, perfil:perfil, fecha:fecha, instancia:instancia, resultado:resultado}
    })
    .done(function (respuesta) {
      console.log(respuesta);
    })
    setTimeout(function(){ location.reload()}, 1000);
  }
}
function buscarRegistros(busqueda) {
var  numero = busqueda.value;
//console.log(numero);
$.ajax({
  url: "desempeno_back.php",
  method:"POST",
  dataType:"HTML",
  data:{n_busqueda:numero}
})
.done(function(respuesta){
  console.log(respuesta);
    $('#lista').html(respuesta);
})
}
