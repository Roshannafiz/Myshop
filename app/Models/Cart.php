<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;


    // Show All Cart Items
    public static function userCartItems()
    {
        if (Auth::check()) {
            $userCartItems = Cart::with('product')->where('user_id', Auth::user_id()->id)->get()->toArray();
        } else {
            $userCartItems = Cart::with('product')->where('session_id', Session::get('session_id'))->get()->toArray();
        }
        return $userCartItems;
    }


    // Relation Cart To Product Table
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    // Get Product Attribute Price To Show Cart Page
    public static function getProductAttrPrice($product_id, $size)
    {
        $attrPrice = ProductsAttribute::select('price')->where([
            'product_id' => $product_id,
            'size' => $size,
        ])->first()->toArray();

        return $attrPrice['price'];
    }
}
