<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
use App\ProductImage;
use Session;

class AdminController extends Controller
{
   public function dashboard(){
    return view('backend.index');
   }
   public function add_product(){
    return view('backend.product.create');
   }
   public function product_store(Request $request){
    $this->validate($request,[
        'title'=>'required|unique:products',
        'description'=>'required',
        'price'=>'required',
        'quantity'=>'required',
        'category_id'=>'required',
        'brand_id'=>'required'

    ]);
    $product=new Product;
    $product->title=$request->title;
    $product->description=$request->description;
    $product->price=$request->price;
    $product->quantity=$request->quantity;
    $product->slug=str_slug($product->title);
    $product->category_id=$request->category_id;
    $product->status=1;
    $product->brand_id=$request->brand_id;
    $product->admin_id=1;
    $product->save();
   //single Image
    // if ($request->hasFile('image')) {
    //     $image=$request->file('image');
    //     $img=time().$image->getClientOriginalName();
    //     $location=public_path('productImage/'.$img);
    //     Image::make($image)->save($location);
    //     $poruct_image=new ProductImage;
    //     $poruct_image->product_id=$product->id;
    //     $poruct_image->image=$img;
    //     $poruct_image->save();
    //    // # code...
    // }
    if (count($request->image)>0) {
        foreach ($request->image as $image) {
            //$image=$request->file('image');
        $img=time().$image->getClientOriginalName();
        $location=public_path('productImage/'.$img);
        Image::make($image)->save($location);
        $poruct_image=new ProductImage;
        $poruct_image->product_id=$product->id;
        $poruct_image->image=$img;
        $poruct_image->save();
        }

    }
    Session::flash('success','Product Inserted Successfully!!');

    return redirect()->back();


   }
   public function product_index(){
    $products=Product::OrderBy('id','desc')->get();
    return view('backend.product.index',compact('products'));
   }
   public function product_delete($id){
    $product=Product::find($id);
    if (!is_null($product)) {
        $product->delete();
    }
    Session::flash('success','Product Delete Successfully');
    return redirect()->back();

   }
   public function product_edit($id){
    $product=Product::find($id);
    return view('backend.product.edit',compact('product'));

   }
   public function product_update(Request $request,$id){
      $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'price'=>'required',
        'quantity'=>'required'

    ]);
    $product= Product::find($id);
    $product->title=$request->title;
    $product->description=$request->description;
    $product->price=$request->price;
    $product->quantity=$request->quantity;
    $product->slug=str_slug($product->title);
    $product->category_id=1;
    $product->status=1;
    $product->brand_id=1;
    $product->admin_id=1;
    $product->update();

    // if (count($request->image)>0) {
    //     foreach ($request->image as $image) {
    //         //$image=$request->file('image');
    //     $img=time().$image->getClientOriginalName();
    //     $location=public_path('productImage/'.$img);
    //     Image::make($image)->save($location);
    //     $poruct_image=new ProductImage;
    //     $poruct_image->product_id=$product->id;
    //     $poruct_image->image=$img;
    //     $poruct_image->update();
    //     }

    // }
    Session::flash('success','Product Update Successfully!!');

    return redirect()->route('product.index');



   }

}
