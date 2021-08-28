<?php

namespace App\Http\Controllers;

use App\Models\mark;
use App\Models\student;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     //  $s= student::with("term.subject.mark")->get();
     $s=student::with("term")->with("test")->get();
echo "<pre>";
     foreach($s as $row){
         echo $row->name;
         foreach($row->mark as $r){
             echo $r->mark;
         }
         echo str_repeat("*",30);

     }
      // dd($s);
    //   foreach($s as $row){

    //     foreach($row->term() as $term){
    //         print_r($term);
    //         echo "hahah $term hahaha" ;
    //     }
    //       //dd($row->term()->first()->subject()->first()->name);
    //       echo $row->name,$row->term()->first()->name,$row->term()->first()->subject()->first()->name;
    //      // echo($row->term()->first()->name);
    //       echo "<br>";
     // }
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
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(mark $mark)
    {
        //
    }
}
