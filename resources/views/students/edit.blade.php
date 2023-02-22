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
                                        <form action="{{ route('students.update', $student) }}" method="post"class="requires-validation" novalidate>
                                            @method('put')
                                            @csrf
                                            <div class="input-group">
                                                <div class="col-md-7">
                                                    @php
                                                        $salaMaternaSelect = $student->nivel=="salaMaterna" ? 'selected' : '';
                                                        $caminadoresUnoSelect = $student->nivel=="caminadoresUno" ? 'selected' : '';
                                                        $caminadoresDocSelect = $student->nivel=="caminadoresDoc" ? 'selected' : '';
                                                        $parvulosUnoSelect = $student->nivel=="parvulosUno"? 'selected' : '';
                                                        $parvulosDosSelect = $student->nivel=="parvulosDos" ? 'selected' : '';
                                                        $parvulosTresSelect = $student->nivel=="parvulosTres" ? 'selected' : '';
                                                        $parvulosCuatroSelect = $student->nivel=="parvulosCuatro" ? 'selected' : '';
                                                        $preJardinUnoSelect = $student->nivel=="preJardinUno"? 'selected' : '';
                                                        $preJardinDosSelect = $student->nivel=="preJardinDos" ? 'selected' : '';
                                                        $preJardinTresSelect = $student->nivel=="preJardinTres" ? 'selected' : '';
                                                        $preJardinCuatroSelect = $student->nivel=="preJardinCuatro" ? 'selected' : '';
                                                        $jardinUnoSelect = $student->nivel=="jardinUno"? 'selected' : '';
                                                        $jardinDosSelect = $student->nivel=="jardinDos" ? 'selected' : '';
                                                        $jardinTresSelect = $student->nivel=="jardinTres" ? 'selected' : '';
                                                        $jardinCuatroSelect = $student->nivel=="jardinCuatro" ? 'selected' : '';
                                                    @endphp
                                                    <select class="form-control" name="nivel" id="nivel" required>
                                                        <option value="">Seleccionar un nivel de matricula</option>
                                                        <option value="salaMaterna" {{$salaMaternaSelect}}>Sala materna</option>
                                                        <option value="caminadoresUno" {{$caminadoresUnoSelect}}>Caminadores 1</option>
                                                        <option value="caminadoresDoc" {{$caminadoresDocSelect}}>Caminadores 2</option>
                                                        <option value="parvulosUno" {{$parvulosUnoSelect}}>Parvulos 1</option>
                                                        <option value="parvulosDos" {{$parvulosDosSelect}}>Parvulos 2</option>
                                                        <option value="parvulosTres" {{$parvulosTresSelect}}>Parvulos 3</option>
                                                        <option value="parvulosCuatro" {{$parvulosCuatroSelect}}>Parvulos 4</option>
                                                        <option value="preJardinUno" {{$preJardinUnoSelect}}>Pre-jardin 1</option>
                                                        <option value="preJardinDos" {{$preJardinDosSelect}}>Pre-jardin 2</option>
                                                        <option value="preJardinTres" {{$preJardinTresSelect}}>Pre-jardin 3</option>
                                                        <option value="preJardinCuatro" {{$preJardinCuatroSelect}}>Pre-jardin 4</option>
                                                        <option value="jardinUno" {{$jardinUnoSelect}}>Jardin 1</option>
                                                        <option value="jardinDos" {{$jardinDosSelect}}>Jardin 2</option>
                                                        <option value="jardinTres" {{$jardinTresSelect}}>Jardin 3</option>
                                                        <option value="jardinCuatro" {{$jardinCuatroSelect}}>Jardin 4</option>
                                                    </select>
                                                    <div class="valid-feedback mv-up">You selected a nivel!</div>
                                                    <div class="invalid-feedback mv-up">Please select a nivel!</div>
                                                    Nivel de matricula
                                                </div>
                                                <div class="col-md-1 "></div>
                                                <div class="col-md-4 pt-3">
                                                    <input class="form-control" type="date" name="fechaMatricula" value="{{ old('fechaMatricula', $student->fechaMatricula) }}" required>
                                                    <div class="valid-feedback mv-up">You selected a fecha de matricula!</div>
                                                    <div class="invalid-feedback mv-up">Please select a fecha de matricula!</div>
                                                    Fecha de{{ __('Registration') }}
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)">
                                                {{ __('Informacion del(a) niño(a)') }}
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="nomAlumno" value="{{ old('nomAlumno', $student->nomAlumno) }}" required>
                                                <div class="valid-feedback">Username field is valid!</div>
                                                <div class="invalid-feedback">Username field cannot be blank!</div>
                                                @error('nomAlumno')
                                                    <br>
                                                    <small>*{{ $message }}</small>
                                                    <br>
                                                @enderror
                                            </div>
                                            <div class="input-group">
                                                <div class="col-md-4 my-auto mt-3">
                                                    <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" onblur="edad()" value="{{ old('fechaNacimiento', $student->fechaNacimiento) }}" required>
                                                    <div class="valid-feedback mv-up">You selected a fecha de nacimiento!</div>
                                                    <div class="invalid-feedback mv-up">Please select a fecha de nacimiento!</div>
                                                    Fecha de nacimiento
                                                </div>
                                                <div class="col-md-4 my-auto mt-3">
                                                    @php
                                                        $femCheck = $student->genero=="Masculino" ? 'checked' : '';
                                                        $masCheck = $student->genero=="Femenino" ? 'checked' : '';
                                                    @endphp
                                                    <center>
                                                        <input type="radio" class="btn-check"  name="genero" id="masc" value="Masculino" {{$femCheck}} required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="masc"><i><img src="{{asset('images/icono-niño.png')}}" alt="icono-niño" width="45px"></i></label>
                                                        <input type="radio" class="btn-check" name="genero" id="fem" value="Femenino" {{$masCheck}}>
                                                        <label class="btn btn-sm btn-outline-secondary" for="fem"><i><img src="{{asset('images/icono-niña.png')}}" alt="icono-niña" width="45px"></i></label>
                                                        <div class="valid-feedback">Gender field is valid!</div>
                                                        <div class="invalid-feedback">Gender field cannot be blank!</div>
                                                    </center>
                                                </div>
                                                <div class="col-md-4 my-auto ">
                                                    <input class="form-control" type="text" name="EdadAlumno" id="EdadAlumno" placeholder="Edad" value="{{ old('EPS', $student->EdadAlumno) }}" readonly required>
                                                    <div class="valid-feedback">Edad field is valid!</div>
                                                    <div class="invalid-feedback">Edad field cannot be blank!</div>
                                                </div>
                                            </div>

                                            <div class="input-group">

                                                <div class="col-md-4 my-auto mt-4">
                                                    @php
                                                        $rcCheck = $student->documentType=="RC" ? 'checked' : '';
                                                        $idexCheck = $student->documentType=="IDEX" ? 'checked' : '';
                                                        $cdCheck = $student->documentType=="CD" ? 'checked' : '';
                                                        $pepCheck = $student->documentType=="PEP" ? 'checked' : '';
                                                    @endphp
                                                    <center>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypeRc" value="RC" {{$rcCheck}} required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypeRc">RC</label>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypeIdex" value="IDEX" {{$idexCheck}} required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypeIdex">IDEX</label>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypeCd" value="CD" {{$cdCheck}} required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypeCd">CD</label>
                                                        <input type="radio" class="btn-check" name="documentType" id="docTypePep" value="PEP" {{$pepCheck}} required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="docTypePep">PEP</label>
                                                        <div class="valid-feedback">Tipo documento field is valid!</div>
                                                        <div class="invalid-feedback">Tipo documento field cannot be blank!</div><br>
                                                        Tipo documento
                                                    </center>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4 my-auto mt-4">
                                                    <input class="form-control" type="number" name="numDocumento" value="{{ old('numDocumento', $student->numDocumento) }}" required>
                                                    <div class="valid-feedback">Numero de documento field is valid!
                                                    </div>
                                                    <div class="invalid-feedback">Numero de documento field cannot be blank!</div>
                                                </div>
                                            </div>

                                            <div class="input-group">
                                                <div class="col-md-6 mt-1 pt-3 mx-auto">
                                                    @php
                                                        $rcCheck = $student->Esalud=="RC" ? 'checked' : '';
                                                        $rsCheck = $student->Esalud=="RS" ? 'checked' : '';
                                                        $espCheck = $student->Esalud=="ESP" ? 'checked' : '';
                                                    @endphp
                                                    Reg de salud:
                                                    <input type="radio" class="btn-check" name="Esalud" id="RC" value="RC" autocomplete="off" {{$rcCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="RC">RC</label>

                                                    <input type="radio" class="btn-check" name="Esalud" id="RS" value="RS" autocomplete="off" {{$rsCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="RS">RS</label>

                                                    <input type="radio" class="btn-check" name="Esalud" id="ESP" value="ESP" autocomplete="off" {{$espCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="ESP">ESP</label>

                                                    <div class="valid-feedback mv-up">You selected a regimen de salud de salud!</div>
                                                    <div class="invalid-feedback mv-up">Please select a regimen de salud de salud!</div>
                                                </div>
                                                <div class="col-md-6  mx-auto">
                                                    <input class="form-control" type="text" name="EPS" placeholder="EPS" value="{{ old('EPS', $student->EPS) }}" required>
                                                    <div class="valid-feedback">EPS field is valid!</div>
                                                    <div class="invalid-feedback">EPS field cannot be blank!</div>
                                                </div>

                                            </div>
                                            <div class="input-group">
                                                <div class="col-md-3 mt-2">
                                                    <input class="form-control mr-1" type="number" name="numTelefonico" value="{{ old('numTelefonico', $student->numTelefonico) }}" required>
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 mt-2 mr-1">
                                                    <input class="form-control" type="number" name="numTelefonicoUno" value="{{ old('numTelefonicoUno', $student->numTelefonicoUno) }}">
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 mt-2 ">
                                                    <input class="form-control" type="number" name="numTelefonicoDos" value="{{ old('numTelefonicoDos', $student->numTelefonicoDos) }}">
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="col-md-12 ">
                                                    <input class="form-control" type="text" name="direccionAlumno" value="{{ old('direccionAlumno', $student->direccionAlumno) }}" required>
                                                    <div class="valid-feedback">Direccion field is valid!</div>
                                                    <div class="invalid-feedback">Direccion field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="barrio"placeholder="Barrio" value="{{ old('barrio', $student->barrio) }}" required>
                                                    <div class="valid-feedback">Barrio field is valid!</div>
                                                    <div class="invalid-feedback">Barrio field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="localidad"placeholder="Localidad" value="{{ old('localidad', $student->localidad) }}" required>
                                                    <div class="valid-feedback">Localidad field is valid!</div>
                                                    <div class="invalid-feedback">Localidad field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-1" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Informacion de la Madre') }}</div>
                                            <div class="input-group">
                                                <div class="col-md-6">
                                                    <input class="form-control" type="text" name="nombreMama" value="{{ old('nombreMama', $student->nombreMama) }}" required>
                                                    <div class="valid-feedback">Nombre field is valid!</div>
                                                    <div class="invalid-feedback">Nombre field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-5 my-auto mt-3">
                                                    <input class="form-control" type="number" name="documentoMama" value="{{ old('documentoMama', $student->documentoMama) }}" required>
                                                    <div class="valid-feedback">Nº documento mama field is valid!</div>
                                                    <div class="invalid-feedback">Nº documento mama field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-4 my-auto mt-3">
                                                    <input class="form-control" type="number" name="telefonoMama" value="{{ old('telefonoMama', $student->telefonoMama) }}" required>
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" name="direccionMama" value="{{ old('direccionMama', $student->direccionMama) }}" required>
                                                    <div class="valid-feedback">Direccion field is valid!</div>
                                                    <div class="invalid-feedback">Direccion field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="email" name="correoMama" value="{{ old('correoMama', $student->correoMama) }}" required>
                                                    <div class="valid-feedback">Correo field is valid!</div>
                                                    <div class="invalid-feedback">Correo field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Informacion del Padre') }}</div>
                                            <div class="input-group">
                                                <div class="col-md-6">
                                                    <input class="form-control" type="text" name="nombrePapa" value="{{ old('nombrePapa', $student->nombrePapa) }}" required>
                                                    <div class="valid-feedback">Nombre field is valid!</div>
                                                    <div class="invalid-feedback">Nombre field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-5">
                                                    <input class="form-control my-auto mt-3" type="number" name="documentoPapa" value="{{ old('documentoPapa', $student->documentoPapa) }}" required>
                                                    <div class="valid-feedback">Documento field is valid!</div>
                                                    <div class="invalid-feedback">Documento field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-control my-auto mt-3" type="number" name="telefonoPapa" value="{{ old('telefonoPapa', $student->telefonoPapa) }}" required>
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" name="direccionPapa" value="{{ old('direccionPapa', $student->direccionPapa) }}" required>
                                                    <div class="valid-feedback">Direccion field is valid!</div>
                                                    <div class="invalid-feedback">Direccion field cannot be blank! </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="email" name="correoPapa" value="{{ old('direccionPapa', $student->correoPapa) }}" required>
                                                    <div class="valid-feedback">Correo field is valid!</div>
                                                    <div class="invalid-feedback">Correo field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Primer responsable') }}</div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="nomPriRes" value="{{ old('nomPriRes', $student->nomPriRes) }}" required>
                                                    <div class="valid-feedback">Nombre 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Nombre 1er responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="docPriRes" value="{{ old('docPriRes', $student->docPriRes) }}" required>
                                                    <div class="valid-feedback">Documento 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Documento 1er responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="telPriRes" value="{{ old('telPriRes', $student->telPriRes) }}" required>
                                                    <div class="valid-feedback">Telefono 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Telefono 1er responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="dirPriRes" value="{{ old('dirPriRes', $student->dirPriRes) }}" required>
                                                    <div class="valid-feedback">Direccion 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Direccion 1er responsable field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Segundo responsable') }}</div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="nomSegRes" value="{{ old('nomSegRes', $student->nomSegRes) }}" required>
                                                    <div class="valid-feedback">Nombre 2do responsable is valid!</div>
                                                    <div class="invalid-feedback">Nombre 2do responsable cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="docSegRes" value="{{ old('docSegRes', $student->docSegRes) }}" required>
                                                    <div class="valid-feedback">Documento 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Documento 2do responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="telSegRes" value="{{ old('telSegRes', $student->telSegRes) }}" required>
                                                    <div class="valid-feedback">Telefono 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Telefono 2do responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="dirSegRes" value="{{ old('dirSegRes', $student->dirSegRes) }}" required>
                                                    <div class="valid-feedback">Direccion 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Direccion 2do responsable field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Tercer responsable') }}</div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="nomTerRes" value="{{ old('nomTerRes', $student->nomTerRes) }}">
                                                    <div class="valid-feedback">Nombre 3er responsable is valid!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="docTerRes" value="{{ old('docTerRes', $student->docTerRes) }}">
                                                    <div class="valid-feedback">Documento 3er responsable field is valid!</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control my-auto mt-3" type="number" name="telTerRes" value="{{ old('telTerRes', $student->telTerRes) }}">
                                                    <div class="valid-feedback">Telefono 3er responsable field is valid!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" name="dirTerRes" value="{{ old('dirTerRes', $student->dirTerRes) }}">
                                                    <div class="valid-feedback">Direccion 3er responsable field is valid!</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mx-auto">
                                                <div class="form-button mt-3 ">
                                                    <button id="submit" type="submit" class="sombra btn btn-secondary">{{__('Edit student')}}</button>
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
    </script>
</x-app-layout>
