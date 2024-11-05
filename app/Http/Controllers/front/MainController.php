<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('front.main.home', compact('products', 'categories'));
    }

    public function product_detail(Product $product)
    {
        return view('front.main.product_detail', compact('product'));
    }
}
