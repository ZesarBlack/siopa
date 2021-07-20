var curp = "";
var tipo = "cadete";
var tipo_elemento = "";


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
/*
  $(document).ready(function(){
    $("#tipo_elemento").change(function(event){
       tipo = $(this).val();
        //alert(tipo);
        buscarElemento(curp ,tipo);
    });
  });
*/
  function buscarElemento(curp){
    //alert(tipo);
    //alert(curp);
    if (curp != "")
      $.ajax({
        type:"POST",
        url:"uploads.php",
        dataType:"html",
        data:{curp_busq:curp},
      })
      .done(function(respuesta){
        //$("#documentos").html(respuesta);
        //alert(respuesta);
        if (respuesta == 1) {
          $("#dropzone").show();
          $("#dropzone").removeAttr( "hidden" );
        }else {
          //$("#dropzone").attr( "hidden" );
          $("#dropzone").hide();
          //alert(respuesta);
          console.log(respuesta);
        }
      })
    }

  /*
  function enviarNombre()
  {
    var midata = new FormData();
    var nombre = 'Diego Armando Lira';
    var pais   = 'México';
    midata.append('nombre',nombre);
    midata.append('pais',  pais);
    var tipo = document.getElementById('tipo_elemento');
    var nom = document.getElementById('nombre');
    let inf = [tipo.value, nom.value];
    formData.append("info", inf);//informacion que se envia

    alert(tipo.value);
    $.ajax({
      type: "POST",
      url: "uploads.php",
      dataType: "html",
      data: midata,
    })
    .done(function(respuesta) {
      alert(respuesta);
    })
  }
  */
