@extends('dashboard.post.layout')

@section('content')
    <a class="btn btn-create" href="{{ route('category.create') }}">Create</a>

    <table class="table mb-3">

        <thead>
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->title }}
                    </td>

                    <td>
                        <a class="btn btn-danger" href="{{ route('category.edit', $category) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('category.show', $category) }}">View</a>
                        <form  action="{{ route('category.destroy', $category) }}" method="post">
                           @method("DELETE")
                           @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $categories->links() }}
@endsection
