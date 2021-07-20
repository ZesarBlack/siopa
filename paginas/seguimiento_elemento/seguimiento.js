var cuip = "";
var noaceptados = /[¿?!¡#$"_%&()<>./=]/;


function buscarElemento() {
  cuip = document.getElementById('cuip').value;
  //console.log(cuip);
  $.ajax({
    url:"seguimiento_back.php",
    type:"post",
    dataType:"html",
    data:{"cuip":cuip}
  })
  .done(function(respuesta){
    console.log(respuesta);
    $("#datos").html(respuesta);

  })
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

$( "#cuip" ).keyup(function() {
  //cuip->this
});
