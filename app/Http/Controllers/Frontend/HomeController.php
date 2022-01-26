<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get All Product For Deals Of The Day
        $dealsOfTheDays = Product::limit(10)->inRandomOrder()->get();

        // Get New Product
        $newProducts = Product::orderBy('id', 'DESC')->where('status', 1)->limit(10)->get()->toArray();

        // Get Featured Product
        $featuredProducts = Product::where('is_featured', 'Yes')->orderBy('id', 'ASC')->limit(10)->get()->toArray();

        return view('frontend.home', compact('newProducts', 'featuredProducts', 'dealsOfTheDays'));
    }
}
