<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudent;
use App\Models\stdDeleted;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDF;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mensaje = "";
      $students = Student::orderBy('id', 'desc')->paginate(10);
      return view('students.index', compact('students','mensaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
      
      $student = Student::create($request->all());
      return redirect()->route('students.show', $student);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function imprimir($id)
    {
      $student = Student::findOrFail($id);
      $pdf = PDF::loadView('students.pdf', compact('student'));
      return $pdf->download($student->nomAlumno.'.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Student $student)
    {
      $mensaje ="Registro actualizado correctamente";
      return view('students.show', compact('student','mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
      $hoy = now()->format('Y-m-d');
      $id = $student->id;
      return view('students.edit', compact('student','hoy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
      $student->update($request->all());
      return redirect()->route('students.show', $student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
      $student->delete();
      return redirect()->route('students.index', $student);
    }
}
