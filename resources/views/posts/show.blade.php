@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
    <h1 class="mt-4">{{ $post->title }}</h1>
    <div class="mt-4">
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::id() === $post->user_id)
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-secondary">Edit</a>

        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
        @endif
    @endif
@endsection