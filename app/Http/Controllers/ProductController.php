<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('products.index',[
            'products'  =>  $products,
        ]);
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        $related_products_by_brand = Product::where('brand_id', $product->brand_id)
                                            ->inRandomOrder()
                                            ->limit(4)
                                            ->get();
        $related_products_by_subcategory = Product::where('subcategory_id', $product->subcategory_id)
                                            ->inRandomOrder()
                                            ->limit(4)
                                            ->get();
        return view('products.show' , [
            'product'=> $product,
            'related_products_by_brand' => $related_products_by_brand,
            'related_products_by_subcategory' => $related_products_by_subcategory

        ]);
    }

}
