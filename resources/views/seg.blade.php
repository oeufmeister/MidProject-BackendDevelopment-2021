@extends('layouts.app')

@section ('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img id="logo" src="{{URL::asset('/image/buku.png')}}" style="height: 25px; padding-left: 3px">
        <a class="navbar-brand" href="#" style="padding-left: 5px">ODSL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/courses">Courses</a>
        </li>
        <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
        </li>
      <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Course 1</a>
                    <a class="dropdown-item" href="#">Course 2</a>
                    <a class="dropdown-item" href="#">Course 3</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
@endsection