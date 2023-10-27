@extends('dashboard.post.layout')

@section('content')
    <h1> Crear categoria</h1>
    @include('dashboard.category.fragment._errors-from')
    <form action="{{ route( 'category.store') }}" method="post">
       
        @include ('dashboard.category._form')

    </form>
@endsection
