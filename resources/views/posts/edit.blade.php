@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
    </div>
    <div class="form-group">
        {{ Form::file('cover_image') }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    <a href="{{url()->previous()}}" class="btn btn-outline-secondary ml-2">Go Back</a>
    {!! Form::close() !!}
@endsection