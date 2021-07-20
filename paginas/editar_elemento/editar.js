$(document).ready(() => {
  $("#fechan").focusout(  () => {
    let value = $("#fechan").val();
    let hoy = new Date();
    let cumpleanos = new Date(value);
    cumpleanos.setDate(cumpleanos.getDate() + 1);
    let edad = hoy.getFullYear() - cumpleanos.getFullYear();
    let m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    if(edad < 18 || edad > 100){
      $("#edad").val("");
      alert("Favor de verificar la fecha de nacimiento");
    }else{
      $("#edad").val(edad);
    }
  });
  $("input#RadioSi").click( () => {
    $("#dependencia_anterior").prop('disabled', false);
  });
  $("input#RadioNo").click( () => {
    $("#dependencia_anterior").val("");
    $("#dependencia_anterior").prop('disabled', true);
  });
  $("input#RadioActivo").click( () => {
    $("#dependencia_anterior").prop('disabled', false);
  });
} );
var fecha = new Date();
var anyo = fecha.getFullYear().toString().substr(2,2);
var mes = ('0' + (fecha.getMonth() + 1)).slice(-2);
var dia = ('0' + fecha.getDate()).slice(-2);
var hora =  fecha.getHours();
var minutos = fecha.getMinutes();
var mili = ('0'+fecha.getTime()).slice(-4);
//document.getElementById('folio').value = (anyo+mes+dia+hora+mili);
/*
function recargar()
{
  location.reload()
}
*/
function mayus(e) {
    e.value = e.value.toUpperCase();
}
