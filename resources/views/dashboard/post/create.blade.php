@extends('dashboard.post.layout')

@section('content')
    <h1 class="font-medium text-teal-400 uppercase leading-4 tracking-widest text-center"> Crear posts</h1>
    @include('dashboard.post.fragment._errors-from')
    <form action="{{ route('post.store') }}" method="post">

       
        @include ('dashboard.post._form')

    </form>
@endsection
