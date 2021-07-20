var curp = "";
var tipo = "";
var tipo_elemento = "";
var noaceptados = /[¿?!¡#$"_%&()<>./=]/;

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


  $(document).ready(function()
  {
    Dropzone.autoDiscover = false;
    $("#dropzone").dropzone({
      url: "uploads.php",
      addRemoveLinks: true,
    //  maxFiles: 3, //maximo de archivos
    //  maxFileSize: 1, //peso maximo de los archivos en megas
      dictResponseError: "Ha ocurrido un error en el servidor",
      acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
      complete: function(file)//funcion para determinar si un archivo se subió
      {
        if(file.status == "success")
        {
              alert("El siguiente archivo se ha subido correctamente: " + file.name);
          }
      },
      init: function() //funcion principal para determinar el estado de un archivo
      {
  //-------------------------------------------
        //rescata el nombre del usuario
          var nom = document.getElementById('nombre');
          //var tip = document.getElementById('tipo_elemento');
        this.on("sending", function(file, xhr, formData)//funcion que permite enviar información extra, en este caso el nombre del usuario
        {

          //alert(tip.value);
          //alert(nom.value);
          //alert("hola");
          /*
          $.ajax({
            type:"POST",
            url:"uploads.php",
            dataType:"HTML",
            data:{tipo2:tip.value},
          })
          .done(function(respuesta){
            alert(respuesta)
          });
          */
          formData.append("nombre", nom.value);//informacion que se envia
          //formData.append("tipo2", tip.value);//informacion que se envia
        });
  //-------------------------------------------
        this.on("maxfilesexceeded", function(file)//funcion que permite verificar el maximo de archivos
        {
          alert("maximo de archivos alcanzado");//mensaje de alerta
             this.removeFile(file);//alimina archivo excedente
        });
  //-------------------------------------------
        this.on("removedfile", function(file)//funcion que permite eliminar archivos en la zona "dropzone"
        {
          //alert("el archivo: "+file.name+" no se subirá");//mensaje de alerta del archivo eliminado
          var nom = document.getElementById('nombre');//rescata el nombre de usuario
          $.ajax({//con una funcion ajax, se envian parametros
            type: "POST",//metodo de envio
            url: "uploads.php?delete=true",//direccion a donde se envia
            data: {"filename": file.name, "nombre2": nom.value},//parametros que se envian "nombre del archivo" y " nombre del usuario"
          })
          .done(function(respuesta){
            alert(respuesta);
          })
        });
      }
    });
  });

  $(document).on('keyup','#nombre', function(event){
  	curp = $(this).val();
    //alert(curp);
    buscarElemento(curp);
  });

  function buscarElemento(curp){
    //alert(tipo);
    //alert(curp);
    var arrayDeCadenas = curp.split(" ");
    //alert(arrayDeCadenas.length);
    if (curp != "" && arrayDeCadenas.length < 2) {
      $.ajax({
        type:"POST",
        url:"uploads.php",
        dataType:"html",
        data:{curp_busq:curp},
      })
      .done(function(respuesta){
        //$("#documentos").html(respuesta);
         //alert(respuesta);
        if (respuesta != 0) {
          $("#zone").show();
          $("#zone").removeAttr( "hidden" );

          $("#nuevo").show();
          $("#nuevo").removeAttr( "hidden" );

          $("#infornacion").html(respuesta);
        }else {
          //$("#dropzone").attr( "hidden" );
          $("#infornacion").html("No hay registros");
          $("#zone").hide();
          $("#nuevo").hide();
          //alert(respuesta);
        }
      })
    }else {
      alert("Verifique el CUIP");
      $("#zone").hide();
      $("#nuevo").hide();
    }
  }

  function recargar()
  {
    location.reload()
  }
