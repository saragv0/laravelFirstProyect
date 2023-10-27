@extends('web.blog.layout')

@section('content')

    <x-web.blog.post.index :posts="$posts" >
        <h1>Listado principal de post </h1>

        @slot('header')
            <h1>Listado principal de post --slot con nombre </h1>
        @endslot

        @slot('footer')
            <footer>
                Pie de página
            </footer>
        @endslot

        @slot('extra', 'extra')

    </x-web.blog.post.index>
@endsection