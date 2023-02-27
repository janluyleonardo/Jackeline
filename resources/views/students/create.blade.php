<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Manage Incomes') }}
    </h2>
  </x-slot>
  <div class="container">
    <div class="row py-0">
      <div class="col-md-6 mx-auto py-1">
        <div class="card shadow">
          <div class="form-body">
            <div class="row">
              <div class="form-holder">
                <div class="form-content">
                  <div class="form-items">
                    <form action="{{ route('students.store') }}" method="post"class="requires-validation" autocomplete="off" novalidate>
                      @csrf
                      <div class="input-group">
                          <div class="col-md-7">
                              <select class="form-control" name="nivel" id="nivel" required>
                                  <option value="">Seleccionar un categoria de matricula</option>
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                              </select>
                              <div class="valid-feedback mv-up">You selected a nivel!</div>
                              <div class="invalid-feedback mv-up">Please select a nivel!</div>
                              Categoria de matricula
                          </div>
                          <div class="col-md-1 "></div>
                          <div class="col-md-4 pt-3">
                              <input class="form-control" type="date" name="fechaMatricula" required>
                              <div class="valid-feedback mv-up">You selected a fecha de matricula!</div>
                              <div class="invalid-feedback mv-up">Please select a fecha de matricula!</div>
                              Fecha de {{ __('Registration') }}
                          </div>
                      </div>
                      <div class="row ">
                        <div class="col-md-11 encabezado">
                          {{ __('Athlete Information') }}
                        </div>
                        <div class="col-md-1 encabezado">
                          <a class="texto" href="javascript:MostrarOcultar('Informacion');">👇</a>
                        </div>
                      </div>
                      <div class="container cp_oculta" id="Informacion">
                        <div class="input-group">
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="nomAlumno" placeholder="{{ __('Full Name') }}" required>
                              <div class="valid-feedback">Username field is valid!</div>
                              <div class="invalid-feedback">Username field cannot be blank!</div>
                          </div>
                          <div class="col-md-4 my-auto mt-4">
                            <input class="form-control" type="number" name="numDocumento"placeholder="N° documento" required>
                            <div class="valid-feedback">Numero de documento field is valid!</div>
                            <div class="invalid-feedback">Numero de documento field cannot be blank!</div>
                          </div>

                            <div class="col-md-4 my-auto mt-3">
                                <center>
                                    <input type="radio" class="btn-check"  name="genero" id="masc" value="Masculino" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="masc"><i><img src="{{asset('images/icono-niño.png')}}" alt="icono-niño" width="45px"></i></label>
                                    <input type="radio" class="btn-check" name="genero" id="fem" value="Femenino" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="fem"><i><img src="{{asset('images/icono-niña.png')}}" alt="icono-niña" width="45px"></i></label>
                                    <div class="valid-feedback">Gender field is valid!</div>
                                    <div class="invalid-feedback">Gender field cannot be blank!</div>
                                </center>
                            </div>
                            <div class="col-md-4 my-auto ">
                                <input class="form-control" type="text" name="PesoAlumno" id="PesoAlumno" placeholder="Peso" required>
                                <div class="valid-feedback">Peso field is valid!</div>
                                <div class="invalid-feedback">Peso field cannot be blank!</div>
                            </div>
                        </div>
                        <div class="input-group">
                          <div class="col-md-4 my-auto ">
                            <input class="form-control" type="text" name="EstaturaAlumno" id="EstaturaAlumno" placeholder="Estatura" required>
                            <div class="valid-feedback">Estatura field is valid!</div>
                            <div class="invalid-feedback">Estatura field cannot be blank!</div>
                          </div>
                          <div class="col-md-1 my-auto "></div>
                          <div class="col-md-2 my-auto ">
                            <input class="form-control" type="text" name="RHAlumno" id="RHAlumno" placeholder="RH" required>
                            <div class="valid-feedback">RH field is valid!</div>
                            <div class="invalid-feedback">RH field cannot be blank!</div>
                          </div>
                          <div class="col-md-1 my-auto "></div>
                          <div class="col-md-4 my-auto mt-4">
                            <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" required>
                            <div class="valid-feedback mv-up">You selected a fecha de nacimiento!</div>
                            <div class="invalid-feedback mv-up">Please select a fecha de nacimiento!</div>
                            Fecha de nacimiento
                          </div>
                        </div>
                        <div class="input-group">
                          <div class="col-md-5  mx-auto">
                            <input class="form-control" type="text" name="Ciudad" placeholder="Ciudad" required>
                            <div class="valid-feedback">Ciudad field is valid!</div>
                            <div class="invalid-feedback">Ciudad field cannot be blank!</div>
                          </div>
                          <div class="col-md-2 mx-auto"></div>
                          <div class="col-md-5 mx-auto">
                              <input class="form-control" type="text" name="Departamento" placeholder="Departamento" required>
                              <div class="valid-feedback">Departamento field is valid!</div>
                              <div class="invalid-feedback">Departamento field cannot be blank!</div>
                          </div>
                          <div class="col-md-4  mx-auto">
                            Lugar de nacimiento
                          </div>
                        </div>
                        <div class="input-group">
                          <div class="col-md-3  mx-auto">
                            <input class="form-control" type="text" name="EPS" placeholder="EPS" required>
                            <div class="valid-feedback">Eps field is valid!</div>
                            <div class="invalid-feedback">Eps field cannot be blank!</div>
                          </div>
                          <div class="col-md-1 mx-auto"></div>
                          <div class="col-md-3 mx-auto">
                            <input class="form-control" type="text" name="Colegio" placeholder="Colegio" required>
                            <div class="valid-feedback">Colegio field is valid!</div>
                            <div class="invalid-feedback">Colegio field cannot be blank!</div>
                          </div>
                          <div class="col-md-1 mx-auto"></div>
                          <div class="col-md-3 mx-auto">
                            <input class="form-control mt-3" type="number" name="anioCursado" placeholder="Curso" required>
                            <div class="valid-feedback">Curso field is valid!</div>
                            <div class="invalid-feedback">Curso field cannot be blank!</div>
                          </div>
                          <div class="col-md-1 mx-auto"></div>
                        </div>
                        <div class="input-group">
                          <div class="col-md-3 mt-2">
                              <input class="form-control mr-1" type="number" name="numTelefonico" placeholder="N° telefono" required>
                              <div class="valid-feedback">Telefono field is valid!</div>
                              <div class="invalid-feedback">Telefono field cannot be blank!</div>
                          </div>
                          <div class="col-md-1"></div>
                          <div class="col-md-3 mt-2 mr-1">
                              <input class="form-control" type="number" name="numTelefonicoUno" placeholder="N° telefono">
                              <div class="valid-feedback">Telefono field is valid!</div>
                              <div class="invalid-feedback">Telefono field cannot be blank!</div>
                          </div>
                          <div class="col-md-1"></div>
                          <div class="col-md-3 mt-2 ">
                              <input class="form-control" type="number" name="numTelefonicoDos" placeholder="N° telefono">
                              <div class="valid-feedback">Telefono field is valid!</div>
                              <div class="invalid-feedback">Telefono field cannot be blank!</div>
                          </div>
                        </div>
                        <div class="input-group">
                          <div class="col-md-12 ">
                              <input class="form-control" type="text" name="direccionAlumno"placeholder="Direccion" required>
                              <div class="valid-feedback">Direccion field is valid!</div>
                              <div class="invalid-feedback">Direccion field cannot be blank!</div>
                          </div>
                          <div class="col-md-5">
                              <input class="form-control" type="text" name="barrio"placeholder="Barrio" required>
                              <div class="valid-feedback">Barrio field is valid!</div>
                              <div class="invalid-feedback">Barrio field cannot be blank!</div>
                          </div>
                          <div class="col-md-2"></div>
                          <div class="col-md-5">
                              <input class="form-control" type="text" name="localidad"placeholder="Localidad" required>
                              <div class="valid-feedback">Localidad field is valid!</div>
                              <div class="invalid-feedback">Localidad field cannot be blank!</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="encabezado col-md-11 mt-1">
                          {{ __('Informacion de la Madre') }}
                        </div>
                        <div class="encabezado col-md-1 mt-1">
                          <a class="texto" href="javascript:MostrarOcultar('Madre');">👇</a>
                        </div>
                      </div>
                      <div class="container cp_oculta" id="Madre">
                          <div class="input-group">
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nombreMama" placeholder="Nombre completo" required>
                                <div class="valid-feedback">Nombre field is valid!</div>
                                <div class="invalid-feedback">Nombre field cannot be blank!</div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5 my-auto mt-3">
                                <input class="form-control" type="number" name="documentoMama"placeholder="Nº documento" required>
                                <div class="valid-feedback">Nº documento mama field is valid!</div>
                                <div class="invalid-feedback">Nº documento mama field cannot be blank!</div>
                            </div>
                            <div class="col-md-4 my-auto mt-3">
                                <input class="form-control" type="number" name="telefonoMama" placeholder="Nº telefonico" required>
                                <div class="valid-feedback">Telefono field is valid!</div>
                                <div class="invalid-feedback">Telefono field cannot be blank!</div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <input class="form-control" type="text" name="direccionMama"placeholder="Direccion" required>
                                <div class="valid-feedback">Direccion field is valid!</div>
                                <div class="invalid-feedback">Direccion field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="correoMama"placeholder="Correo electronico" required>
                                <div class="valid-feedback">Correo field is valid!</div>
                                <div class="invalid-feedback">Correo field cannot be blank!</div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-11 encabezado mt-1">
                          {{ __('Informacion del Padre') }}
                        </div>
                        <div class="col-md-1 encabezado mt-1">
                          <a class="texto" href="javascript:MostrarOcultar('padre');">👇</a>
                        </div>
                      </div>
                      <div class="container cp_oculta" id="padre">
                        <div class="input-group">
                          <div class="col-md-6">
                              <input class="form-control" type="text" name="nombrePapa"placeholder="Nombre completo" required>
                              <div class="valid-feedback">Nombre field is valid!</div>
                              <div class="invalid-feedback">Nombre field cannot be blank!</div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                              <input class="form-control my-auto mt-3" type="number" name="documentoPapa"placeholder="Nº documento" required>
                              <div class="valid-feedback">Documento field is valid!</div>
                              <div class="invalid-feedback">Documento field cannot be blank!</div>
                            </div>
                            <div class="col-md-4">
                              <input class="form-control my-auto mt-3" type="number" name="telefonoPapa" placeholder="Nº telefonico" required>
                              <div class="valid-feedback">Telefono field is valid!</div>
                              <div class="invalid-feedback">Telefono field cannot be blank!</div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                              <input class="form-control" type="text" name="direccionPapa" placeholder="Direccion" required>
                              <div class="valid-feedback">Direccion field is valid!</div>
                              <div class="invalid-feedback">Direccion field cannot be blank! </div>
                          </div>
                          <div class="col-md-12">
                            <input class="form-control" type="email" name="correoPapa"placeholder="Correo electronico" required>
                            <div class="valid-feedback">Correo field is valid!</div>
                            <div class="invalid-feedback">Correo field cannot be blank!</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-11 encabezado mt-1">
                          {{ __('Medical history') }}
                        </div>
                        <div class="col-md-1 encabezado mt-1">
                          <a class="texto" href="javascript:MostrarOcultar('responsable1');">👇</a>
                        </div>
                      </div>
                      <div class="container cp_oculta" id="responsable1">
                        <div class="input-group">
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="enfermedades" placeholder="Enfermedades que padece" required>
                              <div class="valid-feedback">Enfermedades 1er responsable field is valid!</div>
                              <div class="invalid-feedback">Enfermedades 1er responsable field cannot be blank!</div>
                          </div>
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="medicamento" placeholder="Usa algun medicamento" required>
                              <div class="valid-feedback">Medicamento 1er responsable field is valid!</div>
                              <div class="invalid-feedback">Medicamento 1er responsable field cannot be blank!</div>
                          </div>
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="lesion" placeholder="Tiene alguna lesion congenita" required>
                              <div class="valid-feedback">Lesion 1er responsable field is valid!</div>
                              <div class="invalid-feedback">Lesion 1er responsable field cannot be blank!</div>
                          </div>
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="Cirugia" placeholder="Tiene alguna cirugia" required>
                              <div class="valid-feedback">Cirugia 1er responsable field is valid!</div>
                              <div class="invalid-feedback">Cirugia 1er responsable field cannot be blank!</div>
                          </div>
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="impedimento" placeholder="Algo que le impida pracvticar algun deporte" required>
                              <div class="valid-feedback">Impedimento 1er responsable field is valid!</div>
                              <div class="invalid-feedback">Impedimento 1er responsable field cannot be blank!</div>
                          </div>
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="lesionOM" placeholder="Tiene alguna lesion oseo muscular" required>
                              <div class="valid-feedback">Lesion oseo muscular 1er responsable field is valid!</div>
                              <div class="invalid-feedback">Lesion oseo muscular 1er responsable field cannot be blank!</div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.write('<style type="text/css">div.cp_oculta{display: none;}</style>');
    function MostrarOcultar(capa,enlace)
    {
      if (document.getElementById)
      {
        var aux = document.getElementById(capa).style;
        aux.display = aux.display? "":"block";
      }
    }
  </script>
</x-app-layout>
