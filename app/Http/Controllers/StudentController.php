<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Student;

class StudentController extends Controller
{

    /*
    public function __construct()
    {
        $this -> middleware('auth');
    }
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $data = [
            'students' => $students
        ];
        return view('students.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $careers = Career::all();
        $data = [
            'careers' => $careers
        ];
        return view('students.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student -> id_card    = $request -> id_card;
        $student -> first_name = $request -> first_name;
        $student -> last_name  = $request -> last_name;
        $student -> career_id  = $request -> career_id;
        $student -> save();
        echo $student; // Muestra como un JSON --resource
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::FindOrFail($id);
        echo $student;
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
