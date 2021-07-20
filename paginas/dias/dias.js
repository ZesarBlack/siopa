function sumarDias(num_dias) {
  var tipo = document.getElementById('tipo').value
  dias = parseInt(num_dias.value);
  //console.log(dias);
  if (Number.isNaN(dias)) {
    console.log("no hay días para sumar");
  }else {
    $.ajax({
      url:"dias_back.php",
      method:"post",
      dataType:"html",
      data:{dias:dias, tipo:tipo}
    })
    .done(function(respuesta) {
      console.log(respuesta);
      $("#resultado").html(respuesta);
    })
  }
}
