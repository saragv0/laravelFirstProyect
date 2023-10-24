@extends('dashboard.post.layout')

@section('content')
    <a href="{{ route('post.create') }}">Create</a>

    <table>

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
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{ $p->title }}
                    </td>
                    <td>
                        {{$p ->category->title}}
                    </td>
                    <td>
                        {{ $p->posted }}
                    </td>
                    <td>
                        <a href="{{ route('post.edit', $p) }}">Edit</a>
                        <a href="{{ route('post.show', $p) }}">View</a>
                        <form action="{{ route('post.destroy', $p) }}" method="post">
                           @method("DELETE")
                           @csrf
                            <button type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $posts->links() }}
@endsection
