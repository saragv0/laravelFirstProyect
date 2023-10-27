<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\PutRequest;
use App\Models\Category;



class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(2);
        return view('dashboard.category.index', compact('categories'));
    }

    public function create()
    {
        $category = new Category();

        echo view('dashboard.category.create', compact( 'category'));

    }


    public function store(StoreRequest $request)
    {

        Category::create(($request->validated()));
        return to_route("category.index")->with('status', "Registro creado");
    }


    public function show(Category $category)
    {
        return view("dashboard.category.show", compact('category'));
    }

    public function edit(Category $category)
    {

        echo view('dashboard.category.edit', compact( 'category'));
    }

    public function update(PutRequest $request, Category $category)
    {

        $category->update($request->validated());
        
        return to_route("category.index")->with('status', "Registro actualizado");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route("category.index")->with('status', "Registro eliminado");
    }
}
