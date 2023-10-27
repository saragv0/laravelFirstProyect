@extends('dashboard.post.layout')

@section('content')
    <a class="btn btn-create" href="{{ route('post.create') }}">Create</a>

    <table class="table mb-3">

        <thead>
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Catogory
                </th>
                <th>
                    Posted
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{$post ->category->title}}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('post.edit', $post) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('post.show', $post) }}">View</a>
                        <form  action="{{ route('post.destroy', $post) }}" method="post">
                           @method("DELETE")
                           @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $posts->links() }}
@endsection
