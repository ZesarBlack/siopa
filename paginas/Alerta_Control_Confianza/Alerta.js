$.ajax({
  url:"Alertas_back.php?obtener=true",
  dataType:"html",
})
.done(function(respuesta){
  $("#lista").html(respuesta);
})

$(document).ready(function(){
	$("#rango").change(function(event){
        rango = $(this).val();
        //alert(rango);
        //enviar(nombre, fecha, tipo);
        calculaAlerta(rango);
        });
});
function calculaAlerta() {
  //alert(rango);
  $.ajax({
    url: "Alertas_back.php",
    type: "POST",
    dataType: "HTML",
    data: {rango: rango},
  })
  .done(function(respuesta) {
    $("#lista").html(respuesta);
  })
}
