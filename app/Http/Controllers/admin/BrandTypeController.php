<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandTypeRequest;
use App\Models\Brand;
use App\Models\Type;
use Illuminate\Http\Request;

class BrandTypeController extends Controller
{
    public function addIndex()
    {
        return view('admin.characters');
    }

    public function storeCharacter(BrandTypeRequest $request)
    {
        $isAddType = $request->boolean('type-check');
        $isAddBrand = $request->boolean('brand-check');

        $validated = $request->validated();

        if ($isAddType) {
            $type = new Type();
            $type->name = $validated['type-name'];
            $type->save();
        }

        if ($isAddBrand) {
            $brand = new Brand();
            $brand->name = $request['brand-name'];
            $brand->save();
        }

        return back()->with('success', 'Категорія була успішно додана');
    }

    public function editCharacterIndex()
    {
        return view('admin.charactersEdit', ['brands' => Brand::all(), 'types' => Type::all()]);
    }

    public function editCharacterUpdate(Request $request)
    {
        // $brandsDb = Brand::all();
        // $typesDb = Type::all();

        dd($request);
        return "1";
    }
}
