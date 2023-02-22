<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Students list') }}
    </h2>
  </x-slot>

  <div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="container">
          <div class="row py-0">
            <div class="col-md-6 mx-auto py-4">
              @if ($mensaje != "")
              <div class="col-md-12">
                <div class="alert alert-success mt-auto" role="alert">
                  <h1>{{ $mensaje }}</h1>
                </div>
              </div>
              @endif
              <div class="card bg-light ">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-8 py-2">
                      <strong>{{__('Records in database')}}</strong>
                    </div>
                    <div class="col-md-4 flex-row-reverse">
                      <a title="Regresar" href="{{ route('students.create') }}" class="sombra btn btn-secondary">Agregar alumno</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle table-striped table-hover table-sm">
                      @if (count($students) <= 0)
                        <thead>
                          <tr>
                            <th colspan="6" align="center">
                              <center>El estudiante que esta buscano no existe en la base de datos</center>
                            </th>
                          </tr>
                        </thead>
                      @else
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Actions') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          @foreach ($students as $student)
                            <tr>
                              <td>{{ $i }}</td>
                              <td>{{ Str::title($student->nomAlumno) }}</td>
                              <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a title="Show" href="#showModal{{$student->id}}" class="sombra btn btn-info" data-bs-toggle="modal">{{__('See')}}</a>
                                  <a title="Editar" href="{{ route('students.edit', $student) }}" class="sombra btn btn-warning" >{{__('Edit')}}</a>
                                  <a title="Eliminar" href="#deleteModal{{$student->id}}" class="sombra btn btn-danger" data-bs-toggle="modal">{{__('Delete')}}</a>
                                </div>
                              </td>
                            </tr>
                          <?php $i += +1; ?>
                          <!-- Modal show-->
                          <div class="modal fade" id="showModal{{$student->id}}" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content sombra bg-white">
                                <div class="modal-header sombra bn-100">
                                  <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">{{ Str::upper($student->nomAlumno)}}</h1>
                                  <button type="button" class="btn-close sombra" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body sombra">
                                    <div class="row">
                                        <div class="col-md-5">Nivel:</div><div class="col-md-7">{{ $student->nivel}}</div>
                                        <div class="col-md-5">Fecha matricula:</div><div class="col-md-7">{{ $student->fechaMatricula}}</div>
                                        <div class="col-md-5">Edad:</div><div class="col-md-7">{{ $student->EdadAlumno}}</div>
                                        <div class="col-md-5">Genero:</div><div class="col-md-7">{{ $student->genero}}</div>
                                        <div class="col-md-5">EPS:</div><div class="col-md-7">{{ $student->EPS}}</div>
                                        <div class="col-md-5">Fecha de nacimiento:</div><div class="col-md-7">{{ $student->fechaNacimiento}}</div>
                                        <div class="col-md-5">Tipo documento:</div><div class="col-md-7">{{ $student->documentType}}</div>
                                        <div class="col-md-5">Numero documento:</div><div class="col-md-7">{{ $student->numDocumento}}</div>
                                        <div class="col-md-5">Regimen de salud:</div><div class="col-md-7">{{ $student->Esalud}}</div>
                                        <div class="col-md-5">Numero telefonico:</div><div class="col-md-7">{{ $student->numTelefonico}}</div>
                                        <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $student->direccionAlumno}}</div>
                                        <div class="col-md-5">Barrio:</div><div class="col-md-7">{{ $student->barrio}}</div>
                                        <div class="col-md-5">Localidad:</div><div class="col-md-7">{{ $student->localidad}}</div>
                                        <div class="col-md-5">Nombre mama:</div><div class="col-md-7">{{ $student->nombreMama}}</div>
                                        <div class="col-md-5">Documento mama:</div><div class="col-md-7">{{ $student->documentoMama}}</div>
                                        <div class="col-md-5">Telefono mama:</div><div class="col-md-7">{{ $student->telefonoMama}}</div>
                                        <div class="col-md-5">Direccion mama:</div><div class="col-md-7">{{ $student->direccionMama}}</div>
                                        <div class="col-md-5">Nombre papa:</div><div class="col-md-7">{{ $student->nombrePapa}}</div>
                                        <div class="col-md-5">Documento papa:</div><div class="col-md-7">{{ $student->documentoPapa}}</div>
                                        <div class="col-md-5">Telefono papa:</div><div class="col-md-7">{{ $student->telefonoPapa}}</div>
                                        <div class="col-md-5">Direccion papa:</div><div class="col-md-7">{{ $student->direccionPapa}}</div>
                                        <div class="col-md-5">Primer responsable:</div><div class="col-md-7">{{ $student->nomPriRes}}</div>
                                        <div class="col-md-5">Documento:</div><div class="col-md-7">{{ $student->docPriRes}}</div>
                                        <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $student->dirPriRes}}</div>
                                        <div class="col-md-5">Telefono:</div><div class="col-md-7">{{ $student->telPriRes}}</div>
                                        <div class="col-md-5">Segundo responsable:</div><div class="col-md-7">{{ $student->nomSegRes}}</div>
                                        <div class="col-md-5">Documento:</div><div class="col-md-7">{{ $student->docSegRes}}</div>
                                        <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $student->dirSegRes}}</div>
                                        <div class="col-md-5">Telefono:</div><div class="col-md-7">{{ $student->telSegRes}}</div>
                                    </div>
                                </div>
                                <div class="modal-footer bn-100">
                                  <button type="button" class=" sombra btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal delete-->
                          <div class="modal fade" id="deleteModal{{$student->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content sombra bg-white">
                                <div class="modal-header sombra bn-100">
                                  <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">{{ Str::upper($student->nomAlumno)}}</h1>
                                  <button type="button" class="btn-close sombra" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body sombra">
                                  esta segura de eliminar el registro de: <strong>{{ Str::upper($student->nomAlumno)}}</strong>
                                </div>
                                <div class="modal-footer bn-100">
                                  <button type="button" class=" sombra btn btn-warning" data-bs-dismiss="modal">Close</button>
                                  <form action="{{ route('students.destroy', $student) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class=" sombra btn btn-danger">
                                      Eliminar registro
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                            @endforeach
                        </tbody>
                      @endif
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  {{$students->links()}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
