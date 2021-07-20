function mostrarContrasena(){
    var tipo = document.getElementById("contras");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}
//sanitizacion de datos

var noaceptados = /[¿?!_¡#$"%&()<>./@]/;
var noaceptadoscorreo = /[¿?!¡#$"%&()<>/]/;

function sanitizar(texto) {
 if (noaceptados.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptados.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptados,'')
   }
   //console.log(texto.value.replace(noaceptados, ''));
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
}

function sanitizarCorreo(texto) {
 if (noaceptadoscorreo.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptadoscorreo.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptadoscorreo,'')
   }
   //texto.value =  texto.value.replace(noaceptadoscorreo,'')
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
}
