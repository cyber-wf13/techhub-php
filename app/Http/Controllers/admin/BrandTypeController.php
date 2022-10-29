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

        if (!$isAddType && !$isAddBrand) {
            return back()->withErrors('Виберіть один з пунктів');
        }

        $this->storeCharacterLogic($isAddType, $validated, 'type-name', Type::class);
        $this->storeCharacterLogic($isAddBrand, $validated, 'brand-name', Brand::class);

        return back()->with('success', 'Категорія була успішно додана');
    }

    public function editCharacterIndex()
    {
        return view('admin.charactersEdit', ['brands' => Brand::all(), 'types' => Type::all()]);
    }

    public function editCharacterUpdate(Request $request)
    {
        $typeIdArray = $request['type-id'];
        $brandIdArray = $request['brand-id'];

        if ($typeIdArray === null && $brandIdArray === null) {
            return back()->withErrors('Виберіть один із пунктів для редагування');
        }

        if ($typeIdArray !== null) {
            $this->updateCharacterLogic($typeIdArray, Type::class, 'type-', $request);
        }

        if ($brandIdArray !== null) {
            $this->updateCharacterLogic($brandIdArray, Brand::class, 'brand-', $request);
        }


        return back()->with('success', 'Категорія була успішно оновлена');
    }

    private function updateCharacterLogic(array $idArray, $modelName, String $prefix, Request $request)
    {
        foreach ($idArray as $id) {
            $value = $modelName::find($id);
            $value->name = $request[$prefix . $id];
            $value->save();
        }
    }

    private function storeCharacterLogic(Bool $isAdd, array $validRequest, String $prefix, $modelName)
    {
        if ($isAdd) {
            $value = new $modelName();
            $value->name = $validRequest[$prefix];
            $value->save();
        }
    }
}
