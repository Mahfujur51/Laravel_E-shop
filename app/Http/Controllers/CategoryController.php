<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use Image;

class CategoryController extends Controller
{
 public function index(){
     $category=Category::orderBy('id','desc')->get();
     return view('backend.category.index',compact('category'));
 }
 public function category_delete($id){
    $category=Category::find($id);
    if (!is_null($category)) {
        $category->delete();
    }
    Session::flash('success','Category Delete Successfully!!');
    return redirect()->back();
}
public function category_add(){
    $category=Category::all();
    return view('backend.category.create',compact('category'));
}
public function category_store(Request $request){
    $this->validate($request,[
      'name'=>'required|unique:categories',
      'description'=>'required'

  ]);
    $category=new Category();
    $category->name=$request->name;
    $category->description=$request->description;
    $category->parent_id=$request->parent_id;

    if ($request->hasFile('image')) {
        $image=$request->file('image');
        $img=time().$image->getClientOriginalName();
        $location=public_path('CategoryImage/'.$img);
        Image::make($image)->save($location);
        $category->image=$img;


    }
    $category->save();
    Session::flash('success','Category Added Successfully!!');
    return redirect()->route('category.index');

}
public function category_edit($id){
    $category=Category::find($id);
    $cat=Category::all();
    return view('backend.category.edit',compact('category','cat'));
}
}
