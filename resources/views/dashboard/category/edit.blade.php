@extends('dashboard.post.layout')

@section('content')
    <h1 class="font-medium text-teal-400 uppercase leading-4 tracking-widest text-center"> Update category: {{$category->title}} </h1>


    @include('dashboard.category.fragment._errors-from')
    <form class="card" action="{{ route('category.update', $category->id) }}" method="post">
        @method("PATCH")
        @include ('dashboard.category._form')

    </form>
@endsection
 