@extends('layouts.app')

@section('title', 'Mark list')


@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible mt-3">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
{{ Session::get('message') }}
</div>
@endif
<div class="mt-5">
    <h3 class="title">Mark details</h3>
    <div>
        <a class="btn btn-primary align-right" href="{{ route("mark.create") }}">Add mark</a>
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
                Maths
            </th>
            <th>  
                History
            </th>
            <th>  
                Science
            </th>
            <th>  
                Term
            </th>
            <th>  
                Total Marks
            </th>
            <th>  
                Created  on
            </th>
            <th>
                Action
            </th>
          </tr>
      </thead>
      <tbody>
        @forelse ($marks as $mark)
        <tr>
            <td> {{ $loop->index+1 }} </td>
            <td> {{ $mark->student->name }} </td>
            <td>   {{ $mark->maths }} </td>
            <td> {{ $mark->history }}   </td>
            
            <td> {{ $mark->science }}   </td>
            <td> {{ $mark->term->name }}   </td>
            <td> {{ $mark->maths+$mark->history+$mark->science  }}   </td>
            <td>   {{ date("M d ,Y H:i:s a",strtotime($mark->created_at ))}} </td>
            <td>  
            <a class="btn btn-success btn-sm" href={{ route("mark.edit",$mark->id) }}  >Edit</a>  
            <form  onsubmit='return confirm("Do you want delete this student")' action="{{ route('mark.destroy', $mark->id)}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger  btn-sm" title="Delete" type="submit"> Delete</button>
            </form>
            
            </td>
        
        </tr>
    @empty
        <tr><td colspan="8">No students</td></tr>
    @endforelse
      </tbody>
  </table>
</div>
@endsection