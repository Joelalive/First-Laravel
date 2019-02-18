@extends('layout')

@section('title' , 'Laravel - Create')

@section('content')



<form method="POST" action="/projects" >
@csrf

<div class="container pt-4">

<h1>Create New Project</h1>
<div  class="form-group">
<input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Project Title" value="{{ old('title') }}" >
</div>
<div  class="form-group">
<textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Project Description.." >{{ old('description') }}</textarea>
</div>
<div  class="form-group">
<button type="submit" class="btn btn-primary" >Create Project</button>
</div>

</div>



@include('errors')


</form>

@endsection