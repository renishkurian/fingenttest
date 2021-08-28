@extends('layouts.app')

@section('title', 'students')


@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible mt-3">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
{{ Session::get('message') }}
</div>
@endif
<div class="mt-5">
    <h3 class="title">Student details</h3>
    <div>
        <a class="btn btn-primary align-right" href="{{ route("student.create") }}">New Student</a>
    </div>
  <table class="table table-collapsed table-bordered  p-3">
      <thead>
          <tr>
              <th>  
                  slno
              </th>
              <th>  
                Name
            </th>
            <th>  
                Age
            </th>
            <th>  
                Gender
            </th>
            <th>  
                Reporting teacher
            </th>
            <th>
                Action
            </th>
          </tr>
      </thead>
      <tbody>
        @forelse ($students as $student)
        <tr>
            <td> {{ $loop->index+1 }} </td>
            <td> {{ $student->name }} </td>
            <td>   {{ $student->age }} </td>
            <td> {{ $student->gender }}   </td>
            
            <td> {{ $student->teacher()->first()->name; }}   </td>
            <td>  
            <a class="btn btn-success btn-sm" href={{ route("student.edit",$student->id) }}  >Edit</a>  
            <form  onsubmit='return confirm("Do you want delete this student")' action="{{ route('student.destroy', $student->id)}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger  btn-sm" title="Delete" type="submit"> Delete</button>
            </form>
            
            </td>
        
        </tr>
    @empty
        <tr><td colspan="6">No students</td></tr>
    @endforelse
      </tbody>
  </table>
</div>
@endsection