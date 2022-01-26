<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProductsAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function index()
    {
        $userCartItems = Cart::userCartItems();
        return view('frontend.cart', compact('userCartItems'));
    }


    // Add To Cart Product Details Page
    public function addtocart(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            // Check Product Stock Avaiable Or Not
            $getProductstock = ProductsAttribute::where([
                'product_id' => $data['product_id'],
                'size' => $data['size'],
            ])->first()->toArray();
            if ($getProductstock['stock'] < $data['quantity']) {
                return redirect()->back()->with('error_message', "Requered Quantity Not Avaiable !");
            }




            // Generate Session ID If Not Exixts
            $session_id = Session::get('session_id');
            if (empty($session_id)) {
                $session_id = Session::getId();
                Session::put('session_id', $session_id);
            }




            // Check Product Already Exists In User Cart
            if (Auth::check()) {
                // User Is Logged In
                $countProduct = Cart::where([
                    'product_id' => $data['product_id'],
                    'size' => $data['size'],
                    'user_id' => Auth::user()->id,
                ])->count();
            } else {
                // User Is Not Logged In
                $countProduct = Cart::where([
                    'product_id' => $data['product_id'],
                    'size' => $data['size'],
                    'session_id' => Session::get('session_id'),
                ])->count();
            }


            if ($countProduct > 0) {
                return redirect()->back()->with('error_message', "This Product Already Exists In Cart 😃");
            }



            // Save Product In Cart
            $cart = new Cart();
            $cart->session_id = $session_id;
            $cart->product_id = $data['product_id'];
            $cart->size = $data['size'];
            $cart->quantity = $data['quantity'];
            $cart->save();
            return redirect()->back()->with('message', "Product Added In Cart 😃");
        }
    }
}
