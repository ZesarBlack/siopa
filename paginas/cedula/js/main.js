
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
       /* if(file.size > (1024 * 1024 * 1024 *5)) // not more than 5mb
            {
            this.removeFile(file);
            }else if (file.type != "image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd")
          {
            this.removeFile(file);
          }else { */
            alert("El siguiente archivo se ha subido correctamente: " + file.name);
          //}
        }
        //
    },
    init: function() //funcion principal para determinar el estado de un archivo
    {
      var nom = document.getElementById('nombre');//rescata el nombre del usuario
      this.on("sending", function(file, xhr, formData)//funcion que permite enviar información extra, en este caso el nombre del usuario
      {
        formData.append("nombre", nom.value);//infoacion que se envia
      });

    /*	this.on("canceled", function(file)
      {
        alert("tamaño maximo superado");
        this.removeFile(file);//alimina archivo excedente
      });
      */

      this.on("maxfilesexceeded", function(file)//funcion que permite verificar el maximo de archivos
      {
        alert("maximo de archivos alcanzado");//mensaje de alerta
           this.removeFile(file);//alimina archivo excedente
      });

      this.on("removedfile", function(file)//funcion que permite eliminar archivos en la zona "dropzone"
      {
        alert("el archivo: "+file.name+" no se subirá");//mensaje de alerta del archivo eliminado
        var nom = document.getElementById('nombre');//rescata el nombre de usuario
        $.ajax({//con una funcion ajax, se envian parametros
          type: "POST",//metodo de envio
          url: "uploads.php?delete=true",//direccion a donde se envia
          data: {"filename": file.name, "nombre2": nombre.value},//parametros que se envian "nombre del archivo" y " nombre del usuario"
        });
      });
    }
  });
});
