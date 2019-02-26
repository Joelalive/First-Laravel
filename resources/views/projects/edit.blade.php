@extends('layout')

@section('title' , 'Laravel - Edit')

@section('content')



<form method="POST" action="/projects/{{ $project->id }}" >
@method('PATCH')
@csrf
<div class="container pt-4">

<h1>Edit Project</h1>
<div class="form-group">
<input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Project Title" value="{{ $project->title }}" name="title" placeholder="Project Title" >
</div>
<div class="form-group">
<textarea  name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Project Title"  >{{ $project->description }}</textarea>
</div>
<div class="form-group">
<button class="btn btn-primary" type="submit" >Update Project</button>
</div>
</form>
@include('errors')
<form method="POST" action="/projects/{{ $project->id }}" >
@method('DELETE')
@csrf

<div class="form-group">
<button type="submit" class="btn btn-danger" >Delete Project</button>
</div>

</form>

</div>
@endsection