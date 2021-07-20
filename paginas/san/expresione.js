var myRe = /[¿?!¡#$"%&()<>./]/;

function sanitizar(texto) {
 if (myRe.exec(texto.value)) {
   console.log("No es valido");
 }else {
   console.log("Valido");
 }
}
