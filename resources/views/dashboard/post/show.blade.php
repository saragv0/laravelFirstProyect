@extends('dashboard.post.layout')

@section('content')
    <h1> {{ $post->title }} </h1>

    <p> Posted: {{ $post->posted }}</p>

    <p> Description: {{ $post->description }}</p>

    <div class="text"> Content: {{ $post->content }}</div>
@endsection
