
    <div class="row" style="margin-top:2em;">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">Nombre del Curso:</div>
        <div class="col-sm-7"><input placeholder="Nombre del curso" type="text" style='font-size: 12pt;
         font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" onkeyup="mayus(this);" name="NombreCurso" required></div>
    </div>
    <div id="seleccion">
      <div id="cursosp" class="row" style="margin-top:2em;" hidden>
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Curso para: </div>
          <div class="col-sm-7">
          <div class="" data-toggle="buttons">
              <label class="btn btn-primary active">
                  <input type="radio" name="CursoPara" id="option-1" autocomplete="off" value="Cadetes"> Cadetes
              </label>
              <label class="btn btn-primary">
                  <input type="radio" name="CursoPara" id="option-2" autocomplete="off" value="Policias" checked> Policias
              </label>
              <label class="btn btn-primary">
                  <input type="radio" name="CursoPara" id="option-3" autocomplete="off" value="Ambos"> Ambos
              </label>
              </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
      <div id="tipocur" class="row" style="margin-top:2em;" >
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Tipo de Curso: </div>
          <div class="col-sm-7">
          <div class="" data-toggle="buttons">
              <label class="btn btn-primary active">
                  <input type="radio" name="TipoCurso" id="option1" checked autocomplete="off" value=0> Obligatorio
              </label>
              <label class="btn btn-primary">
                  <input type="radio" name="TipoCurso" id="option2" autocomplete="off" value=1> No Obligatorio
              </label>
              </div>
          </div>
      </div>
      <div id="tipocalf" class="row" style="margin-top:2em;" >
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Tipo de Calificación: </div>
          <div class="col-sm-7">
          <div class="" data-toggle="buttons">
              <label class="btn btn-primary active">
                  <input type="radio" name="TipoCalificacion" checked id="option_1" autocomplete="off" value="Numerica"> Númerica
              </label>
              <label class="btn btn-primary">
                  <input type="radio" name="TipoCalificacion" id="option_2" autocomplete="off" value="Aprobado/No Aprobado">Aprobado / No Aprobado
              </label>
              </div>
          </div>
      </div>

      <div id="profim" class="row" style="margin-top:2em;" hidden>
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Profesor que impartirá el curso:</div>
          <div class="col-sm-7"><input placeholder="Profesor" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="cars" id="cars" ></div>
      </div>
      <div id="generacion" class="row" style="margin-top:2em;" hidden>
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Generación:</div>
          <div class="col-sm-7"><input  placeholder="Generación" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="generacion" id="gene" ></div>
      </div>
      <div id="grupo" class="row" style="margin-top:2em;" hidden>
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Grupo:</div>
          <div class="col-sm-7"><input  placeholder="Grupo" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="grupo" id="grup" ></div>
      </div>
      <div id="periodo" class="row" style="margin-top:2em;" hidden>
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Perdiodo de capacitación:</div>
          <div class="col-sm-7"><input  placeholder="Periodo" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="per" id="per" ></div>
      </div>
      <div class="row" style="margin-top:2em;" id="fecha1">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Fecha de Inicio:</div>
          <div class="col-sm-7"><input   type="date" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="FechaInicio" required></div>
      </div>
      <div class="row" style="margin-top:2em;" id="fecha2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Fecha de Finalización:</div>
          <div class="col-sm-7"><input   type="date" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="FechaFinal" required></div>
      </div>
      <div class="row" style="margin-top:2em;">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Duración en Horas:</div>
          <div class="col-sm-7"><input placeholder="Duración" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)"  name="Horas" required></div>
      </div>
      <div class="row" style="margin-top:2em;" id="lugar">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Lugar de Impartición:</div>
          <div class="col-sm-7"><input  placeholder="Lugar" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="Lugar" required></div>
      </div>
      <div class="row" style="margin-top:2em;">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Entidad encargada de capacitar:</div>
          <div class="col-sm-7"><input placeholder="Entidad" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="Entidad" required></div>
      </div>
      <div class="row" style="margin-top:2em;">
          <div class="col-sm-1"></div>
          <div class="col-sm-3">Observaciones:</div>
          <div class="col-sm-7"><input placeholder="Observaciones" type="text" style='font-size: 12pt;
          font-weight: bold; color: red; text-align: center; text-transform:uppercase;' onchange="mayus(this)" name="Observaciones" required></div>
      </div>
      <div class="row" style="margin-top:2em;">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for="FileNAme"> Oficio validación SESNSP</label></div>
          <div class="col-sm-7"><input type="file" name="FileName" id="NombreCurso"></div>
      </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Crear Curso</button>
    </div>
