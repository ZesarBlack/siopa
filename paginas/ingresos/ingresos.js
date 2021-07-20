var tipo = "";
var busqueda = "";

$(document).ready(function(){
  $("#tipo").change(function(event){
     tipo = $(this).val();
     cambiarPlaceholder(tipo);
  });
});

function cambiarPlaceholder(tipo) {
  if (tipo == "control") {
    document.getElementById('busqueda').placeholder = "Ingrese el numero de Control";
    //console.log(tipo);
  }else if (tipo == "cuip") {
    document.getElementById('busqueda').placeholder = "Ingrese el CUIP ";
    //console.log(tipo);
  }
}
function busquedaXtipo() {
  tipo_b = document.getElementById('tipo').value;
  busqueda = document.getElementById('busqueda').value;

  console.log(busqueda);
  console.log(tipo);
    $.ajax({
      url:"ingresos_back.php",
      method:"POST",
      datatype:"html",
      data:{nombre:busqueda, tipo:tipo_b}
    })
    .done(function(respuesta){
      //console.log(respuesta);
      $("#busqueda_tabla").html(respuesta);
    })
}
function limpiarDatos() {
  $.ajax({
    url:"ingresos_back.php",
    method:"POST",
    datatype:"html",
    data:{inicio:1}
  })
  .done(function(respuesta){
    //console.log(respuesta);
    $("#busqueda_tabla").html(respuesta);
  })
}
