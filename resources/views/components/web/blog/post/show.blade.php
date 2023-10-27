<x-alert class="mb-4 alert alert-success " type='Error' :message="$post->title" data-id='1' data-priority="medium"/>

<div  {{$attributes->class(['my-5', 'bg-yellow-100'=> true])->merge(['other-attr' => ' data-1'])}}  >

    {{ $changeTitle() }}
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->created_at }}</p>
    <p>{{ $post->content }}</p>
</div>
