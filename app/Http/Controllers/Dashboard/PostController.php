<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
   
    public function index()
    {
        echo "Index";
    }

    public function create()
    {
        $categories =  Category::pluck('id', 'title');

        echo view('dashboard.post.create', compact('categories'));
    }


    public function store(StoreRequest $request)
    {
        
        $data = array_merge($request->all(), ['image' => ' ']);
        dd($data);

        Post::create(($data));
    }


    public function show(Post $post)
    {
        
    }

    public function edit(Post $post)
    {
        
    }

    public function update(Request $request, Post $post)
    {
        
    }

    public function destroy(Post $post)
    {
    
    }
}
