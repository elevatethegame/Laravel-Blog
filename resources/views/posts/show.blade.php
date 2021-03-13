@extends('layouts.app')

@section('content')
    <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Go Back</a>
    <h1 class="mt-4">{{ $post->title }}</h1>
    @if ($post->cover_image !== 'noimage.jpg')
        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image">
        <br><br>
    @endif
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