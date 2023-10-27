@extends('web.blog.layout')

@section('content')
    
<x-alert class="mb-4 alert alert-success " type='Error' :message="$post->title" data-id='1' data-priority="medium"/>    
<x-web.blog.post.show :post="$post" class="bg-violet-50" />

<x-dynamic-component component='alert' />
       
@endsection