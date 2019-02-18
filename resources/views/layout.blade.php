<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <style>
    .is-complete{
        text-decoration:line-through;
    }
    </style>
</head>
<body>

<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/projects">Projects</a>
      <a class="nav-item nav-link" href="/projects/create">Create</a>
    </div>
  </div>
</nav>


@yield('content')
</body>
</html>