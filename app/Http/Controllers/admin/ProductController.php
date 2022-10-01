<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProductIndex()
    {
        $types = Type::all();
        $brands = Brand::all();
        return view('admin.product', ['types' => $types, 'brands' => $brands]);
    }

    public function editProductIndex($article = null)
    {
        $types = Type::all();
        $brands = Brand::all();
        $viewParams = ['types' => $types, 'brands' => $brands, 'product' => null];
        if ($article) {
            $searchedProduct = Product::getProductByArticle($article);
            if ($searchedProduct === null) {
                return redirect('/admin/product/edit')->withErrors('Товар за даним параметром не знайдено');
            }
            $viewParams['product'] = $searchedProduct;
        }
        return view('admin.productEdit', $viewParams);
    }

    public function editProductSearch(Request $request)
    {
        $validated = $request->validate(['search-article' => 'required|digits:9']);
        $toPath = '/admin/product/edit/' . $validated['search-article'];
        return redirect($toPath);
    }

    public function storeProduct(AddProductRequest $request)
    {
        $validated = $request->validated();

        Product::create([
            'name' => $validated['product-name'],
            'article' => $validated['product-article'],
            'brand_id' => $validated['product-brand'],
            'type_id' => $validated['product-type'],
            'count' => $validated['product-count'],
            'descr' => $validated['product-descr'],
            'price' => $validated['product-price']
        ]);

        return back()->with('success', 'Товар був успішно доданий');
    }
}
