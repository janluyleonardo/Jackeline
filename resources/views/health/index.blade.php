<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Health check') }}
    </h2>
  </x-slot>

  <div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="container">
          <div class="card bg-light mt-2 mb-2 mx-2">
            <div class="card-header">
              <div class="row">
                <div class="col-md-12" style="background:rgba(0, 0, 255, 0.1);">
                  <div class="row">
                    <div class="col-md-12 mx-auto text-center"><h1>Examenes totales:</h1></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2"><h5>Medico:</h5></div>
                    <div class="col-md-2"><h5>Visual:</h5></div>
                    <div class="col-md-2"><h5>Auditivo:</h5></div>
                    <div class="col-md-2"><h5>Odontologico:</h5></div>
                    <div class="col-md-2"><h5>Crecimiento y desarrollo:</h5></div>
                    <div class="col-md-1"></h5></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2"><h5>{{$cantMedico}}</h5></div>
                    <div class="col-md-2"><h5>{{$cantVisual}}</h5></div>
                    <div class="col-md-2"><h5>{{$cantAuditivo}}</h5></div>
                    <div class="col-md-2"><h5>{{$cantOdontologico}}</h5></div>
                    <div class="col-md-2"><h5>{{$cantCreDesarrollo}}</h5></div>
                    <div class="col-md-1"></div>
                  </div>
                </div>
                <div class="col-md-6 mx-auto my-auto">
                  <strong>{{__('Total students in control') .": ". count($registros)}}</strong>
                </div>
                <div class="col-md-6 mx-auto">
                  <div class="row">
                    <form action="" method="get">
                      <div class="row flex-row-reverse" >
                        <div class="col-md-4 my-1">
                          <input type="submit" class="sombra btn btn-info" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                          <input type="text" class="form-control" name="texto" id="texto" value="{{$texto}}">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              @foreach ($healths as $health)
              <div class="row borde-top borde-bottom b-t-l-r b-b-l-r borde-left borde-right b-t-r-r b-b-r-r mb-1">
                  <div class="col-md-12 ">
                    <div class="col-md-6 mx-auto text-center" style="color:red;font-size">
                      <strong><h5>{{$health->nomAlumno}} {{$health->numDocumento}}</h5></strong>
                    </div>
                  </div>
                  <!-- encabezado de la tabla -->
                  <div class="col-md-2"><b>E medico</b></div>
                  <div class="col-md-2"><b>E visual</b></div>
                  <div class="col-md-2"><b>E auditivo</b></div>
                  <div class="col-md-2"><b>E odontologico</b></div>
                  <div class="col-md-3"><b>Crecimiento y Desarrollo</b></div>
                  <div class="col-md-1"></div>
                  <!-- cuerpo de la tabla -->
                  <div class="col-md-2">
                    <div class="col-md-12">{{$health->examenMedico}}</div>
                  </div>
                  <div class="col-md-2">
                    <div class="col-md-12">{{$health->examenVisual}}</div>
                  </div>
                  <div class="col-md-2">
                    <div class="col-md-12">{{$health->examenAuditivo}}</div>
                  </div>
                  <div class="col-md-2">
                    <div class="col-md-12">{{$health->examenOdontologico}}</div>
                  </div>
                  <div class="col-md-3">
                    <div class="row">
                      <div class="col-md-4" style="color:blue;">{{$health->cdActual}}</div>
                      <div class="col-md-4" style="color:red;">{{$health->cdProximo}}</div>
                      <div class="col-md-4" style="color:green;">{{$health->cdEntregado}}</div>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <a title="Editar" href="#updateModal{{$health->id}}" class="sombra btn btn-sm btn-warning" data-bs-toggle="modal">{{__('Edit')}}</a>
                  </div>
              </div>
              <!-- Modal update-->
              <div class="modal fade" id="updateModal{{$health->id}}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content sombra bg-white">
                    <div class="modal-header sombra bn-100">
                      <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">{{ Str::upper($health->nomAlumno)}}</h1>
                      <button type="button" class="btn-close sombra" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body sombra">
                      <div class="row">
                        <div class="col-md-12" style="background:rgba(0, 0, 0, 0.1);">
                          <form action="{{ route('editarRegistro', $health->id) }}" method="post" class="requires-validation" novalidate>
                            @method('put')
                            @csrf
                            <div class="input-group">
                              <div class="col-md-12 mt-1 mb-1">
                                <input class="form-control" type="text" name="nomAlumno" placeholder="Nombre de alumno" value="{{$health->nomAlumno;}}" readonly required>
                                <div class="valid-feedback">Nombre de alumno field is valid!</div>
                                <div class="invalid-feedback">Nombre de alumno field cannot be blank! </div>
                              </div>
                              <div class="col-md-5 mt-1 mb-1">
                                <input class="form-control" type="text" name="numDocumento" placeholder="Documento de alumno" value="{{$health->numDocumento;}}" readonly required>
                                <div class="valid-feedback">Documento de alumno field is valid!</div>
                                <div class="invalid-feedback">Documento de alumno field cannot be blank! </div>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5 mt-1 mb-1">
                                <input class="form-control" type="text" name="edadAlumno" placeholder="Edad de alumno" value="{{$health->edadAlumno;}}" readonly required>
                                <div class="valid-feedback">Edad de alumno field is valid!</div>
                                <div class="invalid-feedback">Edad de alumno field cannot be blank! </div>
                              </div>
                              <div class="col-md-5">
                                <input class="form-control" type="date" name="examenMedico" value="{{$health->examenMedico;}}" id="examenMedico">
                                <div class="valid-feedback mv-up">You selected a fecha de examen medico!</div>
                                <div class="invalid-feedback mv-up">Please select a fecha de examen medico!</div>
                                Examen medico
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input class="form-control" type="date" name="examenVisual" id="examenVisual" value="{{$health->examenVisual;}}">
                                <div class="valid-feedback mv-up">You selected a fecha de examen visual!</div>
                                <div class="invalid-feedback mv-up">Please select a fecha de examen visual!</div>
                                Examen visual
                              </div>
                              <div class="col-md-5">
                                <input class="form-control" type="date" name="examenAuditivo" id="examenAuditivo" value="{{$health->examenAuditivo;}}">
                                <div class="valid-feedback mv-up">You selected a fecha de examen auditivo!</div>
                                <div class="invalid-feedback mv-up">Please select a fecha de examen auditivo!</div>
                                Examen auditivo
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input class="form-control" type="date" name="examenOdontologico" id="examenOdontologico" value="{{$health->examenOdontologico;}}">
                                <div class="valid-feedback mv-up">You selected a fecha de examen odontologico!</div>
                                <div class="invalid-feedback mv-up">Please select a fecha de examen odontologico!</div>
                                Examen odontologico
                              </div>
                              <div class="col-md-5">
                                <input class="form-control" type="date" name="cdActual" id="cdActual" value="{{$health->cdActual;}}">
                                <div class="valid-feedback mv-up">You selected a fecha de crecimiento y esarrollo!</div>
                                <div class="invalid-feedback mv-up">Please select a fecha de crecimiento y esarrollo!</div>
                                Crecimiento y desarrollo
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input class="form-control" type="date" name="cdEntregado" id="cdEntregado" value="{{$health->cdEntregado;}}">
                                <div class="valid-feedback mv-up">You selected a fecha de crecimiento y esarrollo!</div>
                                <div class="invalid-feedback mv-up">Please select a fecha de crecimiento y esarrollo!</div>
                                CD entregado
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer bn-100">
                      <button type="button" class=" sombra btn btn-warning" data-bs-dismiss="modal">Close</button>
                        @csrf
                        <button id="submit" type="submit" class="sombra btn btn-secondary">{{__('Edit health check')}}</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="card-footer">
              <div class="col-md-12">
                {{$healths->links()}}
              </div>
              <div class="row">
                <div class="col-md-4">
                  <strong></strong>
                </div>
                <div class="col-md-4">
                  <a class="sombra btn btn-success ml-4" width="50%" href="{{ route('export') }}">{{__('Export Health check')}}</a>
                </div>
                <div class="col-md-4">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
