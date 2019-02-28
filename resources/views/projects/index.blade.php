@extends('layout')

@section('title' , 'Laravel - Projects')

@section('content')



<div class="container pt-4">
<div class="row">
<h1>Projects</h1>
</div>
</div>
@foreach($projects as $project)
<div  class="container pt-4">
<ul class="list-group">
<li class="list-item"> <a href="/projects/{{ $project->id }}"> {{ $project->title }} </a></li>
</ul>
</div>
@endforeach

@include('flash')



@endsection