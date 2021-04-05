<?php

namespace App\Http\Controllers\Controls;

use App\Http\Controllers\Controller;
use App\Http\Requests\Controls\BrandRequest;
use App\Models\Brand;
use Doctrine\DBAL\Query\QueryException;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('order_index','ASC')->get();
        return  view('controls.brands.index', [
            'brands' =>  $brands,
        ]);
    }


    public function create()
    {
        return  view('controls.brands.create');
    }


    public function store(BrandRequest $request)
    {
        try {
            Brand::create($request->validated());
        }catch (QueryException $e){
            return redirect()->route('controls.brands.index')->withErrors('Create a brand failed');
        }
        return redirect()->route('controls.brands.index');
    }



    public function edit($id, Request $request)
    {
        $brand = Brand::find($id);

        return view('controls.brands.edit', [
            'brand' => $brand
        ]);
    }


    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::find($id);
        if ($brand->update($request->validated())){
            return redirect()->route('controls.brands.index');
        }else{
            return redirect()->route('controls.brands.index')->withErrors('Update a brand failed');
        }
    }



    public function destroy($id,Request $request)
    {
        $brand = Brand::find($id);
        if ($brand->products()->count() !== 0){
            return redirect()->route('controls.brnads.index')->withErrors("Brand cant be deleted if products relating");
        }
        $brand->delete();

        return redirect()->route('controls.brands.index');

    }
}
