<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\programming;
use App\Exports\StudentsExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class ProgrammingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      return "index de programings";
      // $categoria = trim($request->get('categoria'));
      // $categoriaB = trim($request->get('categoriaB'));

      // $categorias = Student::where('Categoria', 'LIKE', '%' . $categoria . '%')
      // ->where('Categoria', 'LIKE', '%' . $categoriaB . '%')
      // ->orderByDesc('id')->get();
      // // ->paginate(15);
      // // $categoria = DB::table('students')->select('Categoria')->distinct()->get();
      // // return $categoria;
      // $texto = trim($request->get('texto'));
      // // $students = Student::orderBy('nomAlumno', 'asc')->paginate(10)->get();
      // $programming = programming::orderBy('hora')->paginate(5);
      // return view('programming.index', compact('texto','programming','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newProgramming = new programming();
      $newProgramming->torneo = $request->torneo;
      $newProgramming->categoria = $request->categoria;
      $newProgramming->categoria = $request->categoria;
      $newProgramming->hora = $request->hora;
      $newProgramming->eLocal = $request->eLocal;
      $newProgramming->eVisitante = $request->eVisitante;
      $newProgramming->fecha = $request->fecha;
      $newProgramming->cancha = $request->cancha;
      try {
        //code...
        $newProgramming->save();
      } catch (\Throwable $th) {
      // throw $th;
      return redirect()->route('programming.index', $newProgramming)->dangerBanner('no se pudo crear nuevo registro => '.$th);
      }
      // $student = Student::create($request->all());
      return redirect()->route('programming.index', $newProgramming)->banner('Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, programming $programming)
    {
        return view('Programming.index', compact('programming'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function export()
    {
      return Excel::download(new StudentsExport, 'Registros.xlsx');
      return view('Registrations.index');
    }
}
