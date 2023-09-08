<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('nominees') }}
    </h2>
  </x-slot>

  <div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="container">
          <div class="card bg-light mt-2 mb-2 mx-2">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6 mx-auto my-auto">
                  <strong>{{__('Total students in control') .": "}}</strong>
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
              <div class="continer">
                <div class="row">
                    @foreach ($programming as $item)
                    <div class="col-md-3">
                      <h4>convocar jugadores</h4>
                      <div class="col-md-12" style="background-color: red;border: 1px solid #000;">
                        {{$item->torneo}}
                        <div class="col-md-12" style="background-color: red;border: 1px solid #000;">
                          @switch($item->Categoria)
                            @case(2008)
                              {{$item->nomDeportista}}
                              {{$item->Categoria}}
                              @break
                            @case(2009)
                              {{$item->nomDeportista}}
                              {{$item->Categoria}}
                              @break
                            @case(2010)
                              {{$item->nomDeportista}}
                              {{$item->Categoria}}
                              @break

                            @default

                          @endswitch

                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
            </div>
            <div class="card-footer">
              <div class="col-md-12">
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
