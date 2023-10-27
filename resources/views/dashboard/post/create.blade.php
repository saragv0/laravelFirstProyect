@extends('dashboard.post.layout')

@section('content')
    <h1> Crear posts</h1>
    @include('dashboard.post.fragment._errors-from')
    <form action="{{ route('post.store') }}" method="post">

       
        @include ('dashboard.post._form')

    </form>
@endsection
