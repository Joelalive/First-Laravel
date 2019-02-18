@extends('layout')

@section('title' , 'Laravel - Show Project')

@section('content')




<div class="container pt-4">

<h1>Show Projects</h1>

<div class="card">
  <h5 class="card-header">Project ID : # {{ $project->id }}</h5>
  <div class="card-body">
    <h5 class="card-title">{{ $project->title }}</h5>
    <p class="card-text">{{ $project->description }}</p>
    <a href="/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit</a>
  </div>
</div>


@if($project->tasks->count())
<div class="card">
<div  class="container pt-4 ">

@foreach($project->tasks as $task)
<form action="/tasks/{{ $task->id }}" method="post">
@method('PATCH')
@csrf
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="completed" {{ $task->completed ? 'checked' : '' }} onChange="this.form.submit()">
    <label class="form-check-label  {{ $task->completed ? 'is-complete' : '' }}">{{ $task->description }}</label>
  </div>
</form>
@endforeach

</div>
</div>
@endif

<div class="card  pt-4">
<div class="container">
<form action="/projects/{{ $project->id }}/tasks" method="POST">
@csrf
<h4>New Task</h4>
<div  class="form-group">
<input type="text" name="description" class="form-control" placeholder="New Task" >
</div>
<div  class="form-group">
<button type="submit" class="btn btn-primary" >Add Task</button>
</div>
@include('errors')
</form>
</div>
</div>

</div>




@endsection