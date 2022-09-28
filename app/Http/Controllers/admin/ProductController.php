<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product');
    }

    public function addProduct(AddProductRequest $request)
    {
        $validated = $request->validated();

        // $product = Product::create([
        //     'name' => $request['product-name'],
        //     'article' => $request['product-article'],
        //     'brand_id' => $request['product-brand'],
        //     'type_id' => $request['product-type'],
        //     'count' => $request['product-count'],
        //     'descr' => $request['product-descr'],
        //     'price' => $request['product-price']
        // ]);
        // $product = new Product();
        // $product->name = $request['product-name'];

        dd($validated);
    }
}
