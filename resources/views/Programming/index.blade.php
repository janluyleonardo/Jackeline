<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{__('Programming')}}
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
                        <div class="container" id="Informacion">
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
                            <div class="col-md-2 mx-auto">
                              <input class="form-control" type="text" name="categoriaB" placeholder="{{ __('Category') }}" required>
                              <div class="valid-feedback">Categoria field is valid!</div>
                              <div class="invalid-feedback">Categoria field cannot be blank!</div>
                            </div>
                            <div class="col-md-4 mx-auto">
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
                          <div class="input-group">
                            <div class="col-md-10 mx-auto my-3">
                              <select name="" id="">
                                @if ($categorias->isEmpty())
                                @else
                                  @foreach ($categorias as $categoria)
                                  <option value="{{$categoria->nomDeportista}}">{{$categoria->nomDeportista}}</option>
                                  @endforeach
                                @endif
                              </select>
                              <div class="valid-feedback">Fecha field is valid!</div>
                              <div class="invalid-feedback">Fecha field cannot be blank!</div>
                            </div>
                          </div>
                        </div>
                        {{-- <div class="col-md-3 mx-auto">
                          <div class="form-button mt-3 mx-auto">
                              <button style="width:100% !important;" id="submit" type="submit" class="sombra btn btn-secondary ">{{__('Add Programming')}}</button>
                          </div>
                        </div> --}}
                      </form>
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-md-12">
                      @if ($programming->isEmpty())
                      @else
                        <table class="table table-striped table-hover">
                          <thead>
                            <th>Torneo</th>
                            <th>Cancha</th>
                            <th>Categoria</th>
                            <th>Rival</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                          </thead>
                          <tbody class="table-group-divider">
                          @forelse ($programming as $item)
                          <tr>
                            <td>{{$item->torneo}}</td>
                            <td>{{$item->cancha}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->eVisitante}}</td>
                            <td>{{$item->hora}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" class="btn btn-sm btn-info sombra"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-sm btn-danger sombra"><i class="bi bi-trash"></i></a>
                              </div>
                            </td>
                          </tr>

                          @empty
                          vacio
                          @endforelse
                          </tbody>
                          <tfoot></tfoot>
                        </table>
                      @endif
                    </div>
                  </div>
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
