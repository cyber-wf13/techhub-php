<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function single($id): View
    {
        $product = Product::find($id);
        return view('product', ['product' => $product]);
    }
}
