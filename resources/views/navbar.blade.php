@extends('layouts.app')

@section ('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size:25px">
    <img id="logo" src="{{URL::asset('/image/buku.png')}}" style="height: 35px; padding-left: 3px">
        <a class="navbar-brand" href="/home" style="padding-left: 5px; font-size: 25px !important">ODSL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-auto" href="{{ route('logout') }}" >Logout</a>
                </li>
                </ul>
    </div>
</nav>
@endsection