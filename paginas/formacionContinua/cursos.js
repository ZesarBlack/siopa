$(document).on('keyup','#BuscarCurso', function(event){
    var valor = $(this).val();
    if (valor != "") {
        buscar_datos(valor);
    }else{
        buscar_datos();
    }
});
function buscar_datos(consulta){
    $.ajax({
        url: 'buscar_curso.php',
        type: 'POST' ,
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    });
}

$(document).ready(function(){
    $('#datos').load('cargar_curso.php');
});

$(document).ready(function(){
	$("#naturaleza").change(function(event){
        naturaleza = $(this).val();
        if (naturaleza === "inicial") {
          $("#formularios").load("form1.php");

        }else if (naturaleza === "normal") {
          $("#formularios").load("form2.php");
        }

        });
});

function mayus(e) {
    e.value = e.value.toUpperCase();
}
