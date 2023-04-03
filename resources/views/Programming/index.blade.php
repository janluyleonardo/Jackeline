<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Students Directory') }}
    </h2>
  </x-slot>

  <div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="container">
          <div class="card bg-light mt-2 mb-2 mx-2">
            <div class="card-header">
              <div class="row">
                <div class="col-md-4">
                  <strong>index de {{__('Programming')}}</strong>
                </div>
                <div class="col-md-4">
                  <a class="sombra btn btn-success ml-4" width="50%" href="{{ route('export') }}">{{__('Export Directory')}}</a>
                </div>
                <div class="col-md-4">
                  <form action="" method="get">
                    <div class="row flex-row-reverse">
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
            <div class="card-body">
              <div class="row py-2">
                <div class="form-holder">
                  <div class="form-content">
                    <div class="form-items">
                      <form action="{{ route('programming.store') }}" method="post" class="requires-validation" novalidate>
                        @csrf
                        <div class="container cp_oculta" id="Informacion">
                          <div class="input-group">
                            <div class="col-md-12">
                              <input class="form-control" type="text" name="torneo" placeholder="{{ __('Tournament name') }}" required>
                              <div class="valid-feedback">Torneo field is valid!</div>
                              <div class="invalid-feedback">Torneo field cannot be blank!</div>
                            </div>
                          </div>
                          <div class="input-group">
                            <div class="col-md-2 mx-auto">
                              <input class="form-control" type="text" name="categoria" placeholder="{{ __('Category') }}" required>
                              <div class="valid-feedback">Categoria field is valid!</div>
                              <div class="invalid-feedback">Categoria field cannot be blank!</div>
                            </div>
                            <div class="col-md-6 mx-auto">
                              <input class="form-control" type="text" name="cancha" placeholder="{{ __('Cancha') }}" required>
                              <div class="valid-feedback">Cancha field is valid!</div>
                              <div class="invalid-feedback">Cancha field cannot be blank!</div>
                            </div>
                            <div class="col-md-2 mx-auto">
                              <input class="form-control" type="text" name="hora" placeholder="{{ __('Match time') }}" required>
                              <div class="valid-feedback">Hora field is valid!</div>
                              <div class="invalid-feedback">Hora field cannot be blank!</div>
                            </div>
                          </div>
                          <div class="input-group">
                            <div class="col-md-2 mx-auto">
                              <input class="form-control" type="text" name="eLocal" value="Jackeline FS" readonly required>
                              <div class="valid-feedback">Equipo local field is valid!</div>
                              <div class="invalid-feedback">Equipo local field cannot be blank!</div>
                            </div>
                            <div class="col-md-4 mx-auto">
                              <input class="form-control" type="text" name="eVisitante" placeholder="{{ __('Visiting Team') }}" required>
                              <div class="valid-feedback">Equipo visitante field is valid!</div>
                              <div class="invalid-feedback">Equipo visitante field cannot be blank!</div>
                            </div>
                            <div class="col-md-4 mx-auto my-3">
                              <input class="form-control" type="date" name="fecha" placeholder="{{ __('Match date') }}" required>
                              <div class="valid-feedback">Fecha field is valid!</div>
                              <div class="invalid-feedback">Fecha field cannot be blank!</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 mx-auto">
                          <div class="form-button mt-3 mx-auto">
                              <button id="submit" type="submit" class="sombra btn btn-secondary ">{{__('Add Programming')}}</button>
                          </div>
                        </div>
                      </form>
                    </div>

                  </div>
                  @foreach ($programming as $item)
                  <div class="row mt-1">
                    <div class="col-md-3 borde-top borde-bottom borde-left b-t-l-r b-b-l-r">
                      {{ Str::title($item->torneo) }}
                    </div>
                    <div class="col-md-3 borde-top borde-bottom">
                      <div class="col-md-12">{{$item->categoria}}</div>
                      <div class="col-md-12">{{$item->eLocal}}</div>
                    </div>
                    <div class="col-md-3 borde-top borde-bottom">
                      <div class="col-md-12">{{$item->hora}}</div>
                      <div class="col-md-12">{{$item->eVisitante}}</div>
                    </div>
                    <div class="col-md-3 borde-top borde-bottom borde-right b-t-r-r b-b-r-r">
                      <div class="col-md-12">{{$item->fecha}}</div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="card-footer">
              {{$programming->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
