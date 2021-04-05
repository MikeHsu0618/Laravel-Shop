<?php

namespace App\Http\Controllers\Controls;

use App\Http\Controllers\Controller;
use App\Http\Requests\Controls\CategoryRequest;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('order_index','ASC')->get();
        return  view('controls.categories.index', [
            'categories' =>  $categories,
        ]);
    }


    public function create()
    {
        return  view('controls.categories.create');
    }


    public function store(CategoryRequest $request)
    {
        try {
            Category::create($request->validated());
        }catch (QueryException $e){
            return redirect()->route('controls.categories.index')->withErrors('Create a Category failed');
        }
        return redirect()->route('controls.categories.index');
    }



    public function edit($id, Request $request)
    {
        $category = Category::find($id);

        return view('controls.categories.edit', [
            'category' => $category,
        ]);
    }


    public function update(CategoryRequest $request, $id)
    {
        $category= Category::find($id);
        if ($category->update($request->validated())){
            return redirect()->route('controls.categories.index');
        }else{
            return redirect()->route('controls.categories.index')->withErrors('Update a Category failed');
        }
    }



    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->subcategories()->count() !== 0 ||$category->products()->count() !== 0){
            return redirect()->route('controls.categories.index')->withErrors("Category cant be deleted if products or subcategories relating");
        }
        $category->delete();

        return redirect()->route('controls.categories.index');

    }
}
