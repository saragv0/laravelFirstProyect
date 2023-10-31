{{ $slot }}



@foreach ($posts as $post)
    <div class="card card-white mb-2">
        <h3 class=".text">{{ $post->title }}</h3>
        <p>{{ $post->description }}</p>
        <a class="btn btn-danger" href="{{ route('web.blog.show', $post) }}">Go</a>

    </div>

    
@endforeach

{{ $posts->links() }} 

{{$footer}}
