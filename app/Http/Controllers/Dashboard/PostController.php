<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(2);
        return view('dashboard.index', compact('posts'));
    }

    public function create()
    {
        $categories =  Category::pluck('id', 'title');
        $post = new Post();

        echo view('dashboard.post.create', compact('categories', 'post'));

    }


    public function store(StoreRequest $request)
    {

        Post::create(($request->validated()));
        return to_route("post.index")->with('status', "Registro creado");
    }


    public function show(Post $post)
    {
        return view("dashboard.post.show", compact('post'));
    }

    public function edit(Post $post)
    {
        $categories =  Category::pluck('id', 'title');

        echo view('dashboard.post.edit', compact('categories', 'post'));
    }

    public function update(PutRequest $request, Post $post)
    {

        $data = $request->validated();

        if(isset($data['image'])){
        
            $data['image'] = $filename= time().".".$data['image']->extension();

            $request->image->move(public_path("image"), $filename);
        }


        $post->update($data);
        
        return to_route("post.index")->with('status', "Registro actualizado");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route("post.index");
        return to_route("post.index")->with('status', "Registro eliminado");
    }
}
