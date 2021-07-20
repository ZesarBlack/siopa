
$(document).ready(function(){
    var id = document.getElementById('id').value;
    console.log("ID: " + id);
    $.ajax({
        url: 'buscarPersonal.php',
        type: 'POST',
        dataType: 'json',
        data: {id: id},
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var iddepartamento = response[i].iddepartamento;
                var funcion = response[i].funcion;
                var puesto = response[i].puesto;
                var con_documento = response[i].con_documento;
                var horario = response[i].horario;
                var sueldo = response[i].sueldo;
            }
            document.getElementById("sueldoAnterior").value =  sueldo;
            document.getElementById("funcionAnterior").value =  funcion;
            document.getElementById("puestoAnterior").value =  puesto;
            document.getElementById("horarioAnterior").value =  horario;
            document.getElementById("departamentoAnterior").value =  iddepartamento;
        },
        error: function(response){
            console.log(response.responseText);
        }
    });
   
    /*.done(function(response){
        alert("HOLA");
        console.log(response);
        var len = response.length;
        for(var i=0; i<len; i++){
            var iddepartamento = response[i].iddepartamento;
            var funcion = response[i].funcion;
            var puesto = response[i].puesto;
            var con_documento = response[i].con_documento;
            var horario = response[i].horario;
            var sueldo = response[i].sueldo;
        }
        alert("Departamento_" + iddepartamento + " funcion " + funcion);
    })
    .fail(function(response){
        alert("noooo");
    });*/
});

