function Actualizar_estado(id)
{
//alert(id);
  $.ajax({
    url:'cambiarE_back.php',
    type:'POST',
    dataType:'html',
    data: {id_estado:id}
  })
  .done(function(respuesta){
    $("#datos").html(respuesta);
    location.reload();
  })
  .fail(function(){
    console.log("error");
  });
}

function Actualizar_estatus(id)
{
  //alert(id);
  $.ajax({
    url:'cambiarE_back.php',
    type:'POST',
    dataType:'html',
    data: {id_estatus:id}
  })
  .done(function(respuesta){
    $("#datos").html(respuesta);
    location.reload();
  })
  .fail(function(){
    console.log("error");
  });
}
