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
                  <strong>index de Registrations</strong>
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
                <div class="col-md-1"></div>
                <div class="col-md-2"><b>Alumno</b></div>
                <div class="col-md-2"><b>Madre alumno</b></div>
                <div class="col-md-2"><b>Padre alumno</b></div>
                <div class="col-md-2"><b>1er responsable</b></div>
                <div class="col-md-2"><b>2do responsable</b></div>
                <div class="col-md-1"></div>
                @foreach ($students as $student)
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-2 borde-top borde-bottom borde-left b-t-l-r b-b-l-r">
                    {{ Str::title($student->nomAlumno) }}
                  </div>
                  <div class="col-md-2 borde-top borde-bottom">
                    <div class="col-md-12">{{$student->nombreMama}}</div>
                    <div class="col-md-12">{{ $student->telefonoMama}}</div>
                  </div>
                  <div class="col-md-2 borde-top borde-bottom">
                    <div class="col-md-12">{{$student->nombrePapa}}</div>
                    <div class="col-md-12">{{ $student->telefonoPapa}}</div>
                  </div>
                  <div class="col-md-2 borde-top borde-bottom">
                    <div class="col-md-12">{{$student->nomPriRes}}</div>
                    <div class="col-md-12">{{ $student->telPriRes}}</div>
                  </div>
                  <div class="col-md-2 borde-top borde-bottom borde-right b-t-r-r b-b-r-r">
                    <div class="col-md-12">{{ $student->nomSegRes}}</div>
                    <div class="col-md-12">{{ $student->telSegRes}}</div>
                  </div>
                  <div class="col-md-1"></div>
                </div>
                @endforeach
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
</x-app-layout>
