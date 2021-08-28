<?php

namespace App\Http\Controllers;

use App\Models\mark;
use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Requests\markFromRequest;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
   
    return view("mark.index",["marks"=>mark::with("student")->with("term")->get()]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mark.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(markFromRequest $request)
    {
     $is_exist=mark::where([['student_id',"=",$request->student_id],["term_id","=",$request->term_id]])->get();

     if(!$is_exist->isEmpty())
    {
        return redirect(route("mark.index"))->with('message',"This entry already exists");
    }
    
       mark::updateOrCreate(["student_id"=>$request->student_id,"term_id"=>$request->term_id],$request->only("student_id","term_id","maths","history","science"));
      student::find($request->student_id)->term()->attach($request->term_id);
       return redirect(route("mark.index"))->with('message',"mark added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show(mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(mark $mark)
    {
        return view("mark.form",["mark"=>$mark]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mark $mark)
    {
        mark::findOrFail($mark->id);
        $data= $request->only("student_id","term_id","maths","history","science");
       

       $mark->fill($data)->save();
    return redirect()->route("mark.index")->with('message',"mark updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(mark $mark)
    {
        $mark->delete();
        
        return redirect()->route('mark.index')->with('message',"Mark deleted");
    }
}
