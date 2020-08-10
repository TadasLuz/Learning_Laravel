@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>My first laravel project, learning it from Youtube: "Laravel From Scratch"</p>
        <p><a class="btn btn-primary btn-lg" href="http://localhost/lsapp/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="http://localhost/lsapp/public/register" role="button">Register</a></p>
    </div>
@endsection