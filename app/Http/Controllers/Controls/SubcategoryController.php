<?php

namespace App\Http\Controllers\Controls;

use App\Http\Controllers\Controller;
use App\Http\Requests\Controls\SubcategoryRequest;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    public function create($category_id , Request $request)
    {
        $category = Category::find($category_id);

        return  view('controls.categories.subcategories.create',[
            'category'  => $category
        ]);
    }

    public function store($category_id, SubcategoryRequest $request)
    {
        $category = Category::find($category_id);
        $subcategory = $category->subcategories()->create($request->validated());

        return redirect()->route('controls.categories.index');
    }

    public function edit($category_id,$subcategory_id)
    {
        $category = Category::find($category_id);
        $subcategory = $category->subcategories()->find($subcategory_id);
        return view('controls.categories.subcategories.edit',[
            'category'=> $category,
            'subcategory'=> $subcategory
        ]);
    }

    public function update( $category_id ,$subcategory_id ,SubcategoryRequest $request)
    {
        $category= Category::find($category_id);
        if ($category->subcategories()->find($subcategory_id)->update($request->validated())){
            return redirect()->route('controls.categories.index');
        }else{
            return redirect()->route('controls.categories.index')->withErrors('Update a Subcategory failed');
        }
    }

    public function destroy($category_id ,$subcategory_id)
    {
        $subcategory= Category::find($category_id)->subcategories()->find($subcategory_id);
        if ($subcategory->products()->count() !== 0){
            return redirect()->route('controls.categories.index')->withErrors("Subcategory cant be deleted if products relating");
        }
        $subcategory->delete();

        return redirect()->route('controls.categories.index');

    }
}
