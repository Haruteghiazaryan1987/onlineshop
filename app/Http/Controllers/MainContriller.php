<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MainContriller extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('index', compact('products'));
    }
    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }
    public function product($categories, $product = null)
    {
        return view('product', ['products' => $product]);
    }
}
