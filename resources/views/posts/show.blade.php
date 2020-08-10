@extends('layouts.app')

@section('content')
    <a href="http://localhost/lsapp/public/posts" class="btn btn-outline-secondary">Go back</a>
    <br><br>
    <h1>{{$post->title}}</h1>
    {{-- <img style="width:100%" src="storage/cover_images/{{$post->cover_image}}"> --}}
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Writter on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="http://localhost/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection