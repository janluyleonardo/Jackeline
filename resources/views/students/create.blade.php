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
                                        <form action="{{ route('students.store') }}" method="post"class="requires-validation" novalidate>
                                            @csrf
                                            <div class="input-group">
                                                {{-- <div class="col-md-8">
                                                    <input type="radio" class="btn-check" name="nivel" id="SALA-CUNA" value="SALA-CUNA" autocomplete="off" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="SALA-CUNA">SALA-CUNA</label>
                                                    <input type="radio" class="btn-check" name="nivel" id="PARVULOS" value="PARVULOS" autocomplete="off" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="PARVULOS">PARVULOS</label>
                                                    <input type="radio" class="btn-check" name="nivel" id="PRE-KINDER" value="PRE-KINDER" autocomplete="off" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="PRE-KINDER">PRE-KINDER</label>
                                                    <input type="radio" class="btn-check" name="nivel" id="KINDER" value="KINDER" autocomplete="off" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="KINDER">KINDER</label>
                                                    <div class="valid-feedback mv-up">You selected a nivel!</div>
                                                    <div class="invalid-feedback mv-up">Please select a nivel!</div>
                                                    Nivel de matricula
                                                </div> --}}
                                                <div class="col-md-7">
                                                    <select class="form-control" name="nivel" id="nivel" required>
                                                        <option value="">Seleccionar un nivel de matricula</option>
                                                        <option value="salaMaterna">Sala materna</option>
                                                        <option value="caminadoresUno">Caminadores 1</option>
                                                        <option value="caminadoresDoc">Caminadores 2</option>
                                                        <option value="parvulosUno">Parvulos 1</option>
                                                        <option value="parvulosDos">Parvulos 2</option>
                                                        <option value="parvulosTres">Parvulos 3</option>
                                                        <option value="parvulosCuatro">Parvulos 4</option>
                                                        <option value="preJardinUno">Pre-jardin 1</option>
                                                        <option value="preJardinDos">Pre-jardin 2</option>
                                                        <option value="preJardinTres">Pre-jardin 3</option>
                                                        <option value="preJardinCuatro">Pre-jardin 4</option>
                                                        <option value="jardinUno">Jardin 1</option>
                                                        <option value="jardinDos">Jardin 2</option>
                                                        <option value="jardinTres">Jardin 3</option>
                                                        <option value="jardinCuatro">Jardin 4</option>
                                                    </select>
                                                    <div class="valid-feedback mv-up">You selected a nivel!</div>
                                                    <div class="invalid-feedback mv-up">Please select a nivel!</div>
                                                    Nivel de matricula
                                                </div>
                                                <div class="col-md-1 "></div>
                                                <div class="col-md-4 pt-3">
                                                    <input class="form-control" type="date" name="fechaMatricula" required>
                                                    <div class="valid-feedback mv-up">You selected a fecha de matricula!</div>
                                                    <div class="invalid-feedback mv-up">Please select a fecha de matricula!</div>
                                                    Fecha de{{ __('Registration') }}
                                                </div>
                                            </div>
                                            <div class="row ">
                                              <div class="col-md-11 encabezado">
                                                {{ __('Informacion del(a) niño(a)') }}
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
                                                  <div class="col-md-4 my-auto mt-3">
                                                      <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" onblur="edad()" required>
                                                      <div class="valid-feedback mv-up">You selected a fecha de nacimiento!</div>
                                                      <div class="invalid-feedback mv-up">Please select a fecha de nacimiento!</div>
                                                      Fecha de nacimiento
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
                                                      <input class="form-control" type="text" name="EdadAlumno" id="EdadAlumno" placeholder="Edad" readonly required>
                                                      <div class="valid-feedback">Edad field is valid!</div>
                                                      <div class="invalid-feedback">Edad field cannot be blank!</div>
                                                  </div>
                                              </div>
                                              <div class="input-group">
                                                <div class="col-md-6 my-auto mt-4">
                                                    <center>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypeRc" value="RC">
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypeRc">RC</label>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypeIdex" value="IDEX" required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypeIdex">IDEX</label>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypeCd" value="CD" required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypeCd">CD</label>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypePep" value="PEP" required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypePep">PEP</label>
                                                        <div class="valid-feedback">Tipo documento field is valid!</div>
                                                        <div class="invalid-feedback">Tipo documento field cannot be blank!</div><br>
                                                        Tipo documento
                                                    </center>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 my-auto mt-4">
                                                    <input class="form-control" type="number" name="numDocumento"placeholder="N° documento" required>
                                                    <div class="valid-feedback">Numero de documento field is valid!</div>
                                                    <div class="invalid-feedback">Numero de documento field cannot be blank!</div>
                                                </div>
                                              </div>
                                              <div class="input-group">
                                                <div class="col-md-6 mt-1 pt-3 mx-auto">
                                                    Reg de salud:
                                                    <input type="radio" class="btn-check" name="Esalud" id="RC" value="RC">
                                                    <label class="btn btn-sm btn-outline-secondary" for="RC">RC</label>
                                                    <input type="radio" class="btn-check" name="Esalud" id="RS" value="RS" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="RS">RS</label>
                                                    <input type="radio" class="btn-check" name="Esalud" id="ESP" value="ESP" required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="ESP">ESP</label>
                                                    <div class="valid-feedback mv-up">You selected a regimen de salud de salud!</div>
                                                    <div class="invalid-feedback mv-up">Please select a regimen de salud de salud!</div>
                                                </div>
                                                <div class="col-md-6  mx-auto">
                                                    <input class="form-control" type="text" name="EPS" placeholder="EPS" required>
                                                    <div class="valid-feedback">EPS field is valid!</div>
                                                    <div class="invalid-feedback">EPS field cannot be blank!</div>
                                                </div>

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
                                                {{ __('Primer responsable') }}
                                              </div>
                                              <div class="col-md-1 encabezado mt-1">
                                                <a class="texto" href="javascript:MostrarOcultar('responsable1');">👇</a>
                                              </div>
                                            </div>
                                            <div class="container cp_oculta" id="responsable1">
                                              <div class="input-group">
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="nomPriRes"placeholder="Apellido(s) y nombre(s)" required>
                                                    <div class="valid-feedback">Nombre 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Nombre 1er responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="docPriRes"placeholder="Documento" required>
                                                    <div class="valid-feedback">Documento 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Documento 1er responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="telPriRes" placeholder="N° telefono" required>
                                                    <div class="valid-feedback">Telefono 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Telefono 1er responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="dirPriRes"placeholder="Direccion" required>
                                                    <div class="valid-feedback">Direccion 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Direccion 1er responsable field cannot be blank!</div>
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-11 encabezado mt-1">
                                                {{ __('Segundo responsable') }}
                                              </div>
                                              <div class="col-md-1 encabezado mt-1">
                                                <a class="texto" href="javascript:MostrarOcultar('responsable2');">👇</a>
                                              </div>
                                            </div>
                                            <div class="container cp_oculta" id="responsable2">
                                            <div class="input-group">
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="nomSegRes"placeholder="Apellido(s) y nombre(s)" required>
                                                    <div class="valid-feedback">Nombre 2do responsable is valid!</div>
                                                    <div class="invalid-feedback">Nombre 2do responsable cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="docSegRes"placeholder="N° documento" required>
                                                    <div class="valid-feedback">Documento 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Documento 2do responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="telSegRes"placeholder="N° telefono" required>
                                                    <div class="valid-feedback">Telefono 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Telefono 2do responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="dirSegRes"placeholder="Direccion" required>
                                                    <div class="valid-feedback">Direccion 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Direccion 2do responsable field cannot be blank!</div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-11 encabezado mt-1">
                                                {{ __('Tercer responsable') }}
                                              </div>
                                              <div class="col-md-1 encabezado mt-1">
                                                <a class="texto" href="javascript:MostrarOcultar('responsable3');">👇</a>
                                              </div>
                                            </div>
                                            <div class="container cp_oculta" id="responsable3">
                                              <div class="input-group">
                                                  <div class="col-md-8">
                                                      <input class="form-control" type="text" name="nomTerRes"placeholder="Apellido(s) y nombre(s)">
                                                      <div class="valid-feedback">Nombre 3er responsable is valid!</div>
                                                  </div>
                                                  <div class="col-md-1"></div>
                                                  <div class="col-md-3">
                                                      <input class="form-control my-auto mt-3" type="number" name="docTerRes"placeholder="N° documento">
                                                      <div class="valid-feedback">Documento 3er responsable field is valid!</div>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <input class="form-control my-auto mt-3" type="number" name="telTerRes"placeholder="N° telefono">
                                                      <div class="valid-feedback">Telefono 3er responsable field is valid!</div>
                                                  </div>
                                                  <div class="col-md-1"></div>
                                                  <div class="col-md-8">
                                                      <input class="form-control" type="text" name="dirTerRes"placeholder="Direccion">
                                                      <div class="valid-feedback">Direccion 3er responsable field is valid!</div>
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4 mx-auto">
                                                <div class="form-button mt-3 ">
                                                    <button id="submit" type="submit" class="sombra btn btn-secondary">{{__('Add student')}}</button>
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
        function edad() {
            var fecha = document.getElementById("fechaNacimiento").value;
            // Si la fecha es correcta, calculamos la edad

            var values = fecha.split("-");
            var dia = values[2];
            var mes = values[1];
            var ano = values[0];

            // cogemos los valores actuales
            var fecha_hoy = new Date();
            var ahora_ano = fecha_hoy.getYear();
            var ahora_mes = fecha_hoy.getMonth() + 1;
            var ahora_dia = fecha_hoy.getDate();

            // realizamos el calculo
            var edad = (ahora_ano + 1900) - ano;
            if (ahora_mes < mes) {
                edad--;
            }
            if ((mes == ahora_mes) && (ahora_dia < dia)) {
                edad--;
            }
            if (edad > 1900) {
                edad -= 1900;
            }

            // calculamos los meses
            var meses = 0;

            if (ahora_mes > mes && dia > ahora_dia)
                meses = ahora_mes - mes - 1;
            else if (ahora_mes > mes)
                meses = ahora_mes - mes
            if (ahora_mes < mes && dia < ahora_dia)
                meses = 12 - (mes - ahora_mes);
            else if (ahora_mes < mes)
                meses = 12 - (mes - ahora_mes + 1);
            if (ahora_mes == mes && dia > ahora_dia)
                meses = 11;

            // calculamos los dias
            var dias = 0;
            if (ahora_dia > dia)
                dias = ahora_dia - dia;
            if (ahora_dia < dia) {
                ultimoDiaMes = new Date(ahora_ano, ahora_mes - 1, 0);
                dias = ultimoDiaMes.getDate() - (dia - ahora_dia);
            }
            var edadFinal = edad + " años, " + meses + " meses " + dias + " días"
            document.getElementById("EdadAlumno").value = edadFinal;
        }

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
