@extends('layouts.app')

@section('title', 'Mark list')


@section('content')

<div class="container mt-5">
@if(isset($student))

    {{ Form::model($student, ['route' => ['student.update', $student->id], 'method' => 'patch']) }}
@else
    {{ Form::open(['route' => 'student.store']) }}
    <h3 class="title" id="title">Add new student</h3>
@endif
<div class="row">
    <div class="col-md-6">{{ Form::label('name', 'Student Name'); }} 
        

            @if ($errors->has('name'))
           <span class="text-danger" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        {{ Form::text('name', null,['placeholder'=>"Student name",'class'=>"form-control",'required']) }}</div>
    <div class="col-md-6">{{ Form::label('age', 'Age'); }} 
        
        @if ($errors->has('age'))
        <span class="text-danger" role="alert">
         <strong>{{ $errors->first('age') }}</strong>
         </span>
         @endif
        
        {{ Form::number('age', null,["placeholder"=>"age",'class'=>"form-control",'required']) }}</div>
</div>
<div class="row">
<div class="cpl-md-6"></div>
<div class="cpl-md-6"></div>
</div>
<div class="row">
    <div class="col-md-6"> {{ Form::label('gender', 'Gender'); }}
        
        @if ($errors->has('gender'))
        <span class="text-danger" role="alert">
         <strong>{{ $errors->first('gender') }}</strong>
         </span>
         @endif
        {!! Form::select('gender', ["M"=>"Male","F"=>"Female"],null,["placeholder"=>"gender",'class'=>"form-control"]) !!}</div>
    <div class="col-md-6">{{ Form::label('teacher', 'Reporting Teacher'); }}
        
        
        @if ($errors->has('teacher_id'))
        <span class="text-danger" role="alert">
         <strong>{{ $errors->first('teacher_id') }}</strong>
         </span>
         @endif
        {!! Form::select( "teacher_id", \App\Models\Teacher::pluck('name','id') , null,  ['id'=>'natcode','placeholder'=>"choose teacher", 'required','class'=>"form-control"] ) !!}</div>
    </div>
    <div class="row pt-3">
        <div class="col-md-12">   {{ Form::submit('Save', ['name' => 'submit' ,'class'=>"btn btn-primary form-control"]) }}</div>
      
        </div>
    
   
   
    
 
{{ Form::close() }}

</div>
@endsection
