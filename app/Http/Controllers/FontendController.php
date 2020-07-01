<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
class FontendController extends Controller
{
    public function  index(){
        $products=Product::paginate(12);
        return view('index',compact('products'));
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function product(){
        $products=Product::paginate(12);
        return view('Product.index',compact('products'));
    }
    public function show($slug){
        $products=Product::Where('slug',$slug)->first();
        if (!is_null($products)) {
            return view('Product.show',compact('products'));

        }
        else{
            Session::flash('info','There are no Porduct In this URL');
            return redirect()->back();
        }
    }
    public function search(Request $request){
        $search=$request->search;
        $products=Product::orWhere('title','like','%'.$search.'%')
        ->orWhere('description','like','%'.$search.'%')
        ->orWhere('price','like','%'.$search.'%')
        ->orWhere('slug','like','%'.$search.'%')
        ->OrderBy('id','desc')->paginate(9);
        return view('search',compact('search','products'));

    }

}
