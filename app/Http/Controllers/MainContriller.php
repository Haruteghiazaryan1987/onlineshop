<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainContriller extends Controller
{
    public function index(){
        return view('index');
    }
    public function categories(){
        $categories=Category::get();
        return view('categories',compact('categories'));
    }
    public function category($code){
        $category=Category::where('code',$code)->first();
        return view('category',compact('category'));
    }
    public function product($product=null){
        // dd($product);
        return view('product',['products'=>$product]);
    }
}
