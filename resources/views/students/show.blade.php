<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Student data') }}
    </h2>
  </x-slot>
  <div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-auto" style="width:650px;">
        <div class="container">
          <div class="row py-0 m-auto">
            <div class="card py-1 px-1 ">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-8 mx-auto my-auto text-center">
                    <b>{{ Str::upper($student->nomAlumno)}}</b>
                  </div>
                  <div class="col-md-2">
                    <a title="Regresar" href="{{ route('imprimir', $student) }}" class="sombra btn btn-info mx-auto">imprimir</a>
                  </div>
                  <div class="col-md-2">
                    <a title="Regresar" href="{{ route('students.index', $student) }}" class="sombra btn btn-danger mx-auto">volver</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"><b>Nivel:</b></div><div class="col-md-6">{{ $student->nivel}}</div>
                  <div class="col-md-6"><b>Fecha matricula:</b></div><div class="col-md-6">{{ $student->fechaMatricula}}</div>
                  <div class="col-md-6"><b>Edad:</b></div><div class="col-md-6">{{ $student->EdadAlumno}}</div>
                  <div class="col-md-6"><b>Genero:</b></div><div class="col-md-6">{{ $student->genero}}</div>
                  <div class="col-md-6"><b>EPS:</b></div><div class="col-md-6">{{ $student->EPS}}</div>
                  <div class="col-md-6"><b>Fecha de nacimiento:</b></div><div class="col-md-6">{{ $student->fechaNacimiento}}</div>
                  <div class="col-md-6"><b>Tipo documento:</b></div><div class="col-md-6">{{ $student->documentType}}</div>
                  <div class="col-md-6"><b>Numero documento:</b></div><div class="col-md-6">{{ $student->numDocumento}}</div>
                  <div class="col-md-6"><b>Regimen de salud:</b></div><div class="col-md-6">{{ $student->Esalud}}</div>
                  <div class="col-md-6"><b>Numero telefonico:</b></div><div class="col-md-6">{{ $student->numTelefonico}}</div>
                  <div class="col-md-6"><b>Numero telefonico 1:</b></div><div class="col-md-6">{{ $student->numTelefonicoUno}}</div>
                  <div class="col-md-6"><b>Numero telefonico 2:</b></div><div class="col-md-6">{{ $student->numTelefonicoDos}}</div>
                  <div class="col-md-6"><b>Direccion:</b></div><div class="col-md-6">{{ $student->direccionAlumno}}</div>
                  <div class="col-md-6"><b>Barrio:</b></div><div class="col-md-6">{{ $student->barrio}}</div>
                  <div class="col-md-6"><b>Localidad:</b></div><div class="col-md-6">{{ $student->localidad}}</div>
                  <div class="col-md-6"><b>Nombre mama:</b></div><div class="col-md-6">{{ $student->nombreMama}}</div>
                  <div class="col-md-6"><b>Documento mama:</b></div><div class="col-md-6">{{ $student->documentoMama}}</div>
                  <div class="col-md-6"><b>Telefono mama:</b></div><div class="col-md-6">{{ $student->telefonoMama}}</div>
                  <div class="col-md-6"><b>Direccion mama:</b></div><div class="col-md-6">{{ $student->direccionMama}}</div>
                  <div class="col-md-6"><b>Correo mama:</b></div><div class="col-md-6">{{ $student->correoMama}}</div>
                  <div class="col-md-6"><b>Nombre papa:</b></div><div class="col-md-6">{{ $student->nombrePapa}}</div>
                  <div class="col-md-6"><b>Documento papa:</b></div><div class="col-md-6">{{ $student->documentoPapa}}</div>
                  <div class="col-md-6"><b>Telefono papa:</b></div><div class="col-md-6">{{ $student->telefonoPapa}}</div>
                  <div class="col-md-6"><b>Direccion papa:</b></div><div class="col-md-6">{{ $student->direccionPapa}}</div>
                  <div class="col-md-6"><b>Correo papa:</b></div><div class="col-md-6">{{ $student->correoPapa}}</div>
                  <div class="col-md-6"><b>1er responsable:</b></div><div class="col-md-6">{{ $student->nomPriRes}}</div>
                  <div class="col-md-6"><b>Documento:</b></div><div class="col-md-6">{{ $student->docPriRes}}</div>
                  <div class="col-md-6"><b>Direccion:</b></div><div class="col-md-6">{{ $student->dirPriRes}}</div>
                  <div class="col-md-6"><b>Telefono:</b></div><div class="col-md-6">{{ $student->telPriRes}}</div>
                  <div class="col-md-6"><b>2do responsable:</b></div><div class="col-md-6">{{ $student->nomSegRes}}</div>
                  <div class="col-md-6"><b>Documento:</b></div><div class="col-md-6">{{ $student->docSegRes}}</div>
                  <div class="col-md-6"><b>Direccion:</b></div><div class="col-md-6">{{ $student->dirSegRes}}</div>
                  <div class="col-md-6"><b>Telefono:</b></div><div class="col-md-6">{{ $student->telSegRes}}</div>
                  <div class="col-md-6"><b>3er responsable:</b></div><div class="col-md-6">{{ $student->nomTerRes}}</div>
                  <div class="col-md-6"><b>Documento:</b></div><div class="col-md-6">{{ $student->docTerRes}}</div>
                  <div class="col-md-6"><b>Direccion:</b></div><div class="col-md-6">{{ $student->dirTerRes}}</div>
                  <div class="col-md-6"><b>Telefono:</b></div><div class="col-md-6">{{ $student->telTerRes}}</div>
                </div>
              </div>
              <div class="card-footer"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
