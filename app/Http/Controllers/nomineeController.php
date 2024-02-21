<?php

namespace App\Http\Controllers;

use App\Models\programming;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nomineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $Cate2008 = [];
      $Cate2009 = [];
      $Cate2010 = [];
      $programming = DB::table('students')
            ->select('nomDeportista','students.Categoria','programmings.torneo')
            ->join('programmings', 'students.Categoria', '=', 'programmings.categoria')->get();
            // ->join('orders', 'users.id', '=', 'orders.user_id');

      // return $programming;
      // $categoria = Student::select('Categoria')->distinct()->get();
      // $student_2008 = Student::where('Categoria','2008')->get();
      // return $categoria;
      $texto = trim($request->get('texto'));
      // $programming = programming::orderBy('hora', 'desc')->paginate(10);
      // // return $programming;
      return view('nominee.index', compact('texto','programming'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
