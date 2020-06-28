<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FontendController extends Controller
{
    public function  index(){
        return view('index');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function product(){
        $products=Product::all();
        return view('Product.index',compact('products'));

    }
}
