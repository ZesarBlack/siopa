var nombres = [];
var i= -1;
var node = document.createElement("tr");
var noded = document.createElement("td");

function guardar() {
  i =i+1;
  var nombre = document.getElementById('nombre').value;
  var paterno = document.getElementById('paterno').value;
  var materno = document.getElementById('materno').value;
  var persona = {nombre: nombre, paterno: paterno, materno: materno};
  nombres.push(persona);


  var textnom = document.createTextNode(nombres[i].nombre);
  var textpat = document.createTextNode(nombres[i].paterno);
  var textmat = document.createTextNode(nombres[i].materno);

  noded.appendChild(textnom);
  noded.appendChild(textpat);
  noded.appendChild(textmat);

  node.appendChild(noded);

  document.getElementById("tabla").appendChild(node);
  document.getElementById("columna").appendChild(noded);

  //document.querySelector("#tabla").innerHTML = JSON.stringify(nombres[].nombre)
  document.getElementById('nombre').value ="";
  document.getElementById('paterno').value ="";
  document.getElementById('materno').value ="";

}
