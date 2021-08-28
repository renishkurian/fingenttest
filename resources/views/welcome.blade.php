@extends('layouts.app')

@section('title', 'students')


@section('content')
<div class="container pt-3">
    <h3 id="title" > Student portal</h3>
<a class="btn btn-info" href={{ route("student.index") }}>Student management</a>
<a class="btn btn-primary" href={{ route("student.index") }}>Mark management</a>
</div>
@endsection