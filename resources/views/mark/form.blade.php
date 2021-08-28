@extends('layouts.app')

@section('title', 'Enter mark')
<div class="container mt-5">
@section('content')
@if(isset($student))

    {{ Form::model($student, ['route' => ['student.update', $student->id], 'method' => 'patch']) }}
    <h3 class="title" id="title">Edit Mark</h3>
@else
    {{ Form::open(['route' => 'mark.store']) }}
    <h3 class="title" id="title">Add Mark</h3>
@endif
<div class="row">
    <div class="col-md-6">{{ Form::label('student_id', 'Student Name'); }} 
        

            @if ($errors->has('student_id'))
           <span class="text-danger" role="alert">
            <strong>{{ $errors->first('student_id') }}</strong>
            </span>
            @endif
            {!! Form::select( "student_id", \App\Models\student::pluck('name','id') , null,  ['id'=>'natcode','placeholder'=>"choose student", 'required','class'=>"form-control"] ) !!}
    </div>
    <div class="col-md-6">{{ Form::label('term_id', 'Term'); }} 
        
        @if ($errors->has('term_id'))
        <span class="text-danger" role="alert">
         <strong>{{ $errors->first('term_id') }}</strong>
         </span>
         @endif
        
         {!! Form::select( "student_id", \App\Models\Term::pluck('name','id') , null,  ['id'=>'natcode','placeholder'=>"choose student", 'required','class'=>"form-control"] ) !!}

        </div>
</div>
<div class="row">
       <div class="col-md-6">
        {{ Form::label('maths', 'Maths mark'); }} 
           @if ($errors->has('maths'))
       <span class="text-danger" role="alert">
        <strong>{{ $errors->first('maths') }}</strong>
        </span>
        @endif
        {{ Form::text('maths', null,['placeholder'=>"Maths mark",'class'=>"form-control",'required']) }}
    </div>
    <div class="col-md-6">

        {{ Form::label('science', 'Science mark'); }} 
        

        @if ($errors->has('science'))
       <span class="text-danger" role="alert">
        <strong>{{ $errors->first('science') }}</strong>
        </span>
        @endif
        {{ Form::text('science', null,['placeholder'=>"science mark",'class'=>"form-control",'required']) }}

    </div>

    </div>
    <div class="row">
    
        <div class="col-md-6">
            {{ Form::label('history', 'history mark'); }} 
         
    
            @if ($errors->has('history'))
           <span class="text-danger" role="alert">
            <strong>{{ $errors->first('history') }}</strong>
            </span>
            @endif
            {{ Form::text('history', null,['placeholder'=>"history mark",'class'=>"form-control",'required']) }}
        </div>
        <div class="col-md-6 pt-4">   {{ Form::submit('Save', ['name' => 'submit' ,'class'=>"btn btn-primary form-control"]) }}</div>
      
        </div>
    
   
   
    
 
{{ Form::close() }}

</div>
