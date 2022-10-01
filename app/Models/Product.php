<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'article', 'brand_id', 'type_id', 'count', 'descr', 'price'];

    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function type()
    {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public static function getProductByArticle(String $article)
    {
        $searchedProduct = Product::where('article', $article)->first();
        if ($searchedProduct) {
            return $searchedProduct;
        }
        return null;
    }
}
