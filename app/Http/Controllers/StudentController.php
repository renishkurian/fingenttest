<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests\StoreStudentRequest ;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               $x=Teacher::with("student")->get();
     
        $students=student::with("teacher")->get();
           
        return view('student.index',["students"=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("student.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
       $data= $request->only('name', 'age', 'gender','teacher_id');
       student::create($data);
    return redirect(route("student.index"))->with('message',"student created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        Student::findOrFail($student->id);
        return view("student.form",["student"=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        Student::findOrFail($student->id);
        $data= $request->only('name', 'age', 'gender','teacher_id');
       

       $student->fill($data)->save();
    return redirect()->route("student.index")->with('message',"student update");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
        
        return redirect()->route('student.index')->with('message',"student deleted");
        //
    }
}
