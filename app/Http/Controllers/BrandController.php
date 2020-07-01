<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Image;
use Session;
use File;

class BrandController extends Controller
{
    public function index(){
        $brand=Brand::orderBy('id','desc')->get();
        return view('backend.brand.index',compact('brand'));
    }
    public function brand_add(){

        return view('backend.brand.create');
    }
    public function brand_store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:categories',
            'description'=>'required'
        ]);
        $brand=new Brand();
        $brand->name=$request->name;
        $brand->description=$request->description;

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $img=time().$image->getClientOriginalName();
            $location=public_path('BrandImage/'.$img);
            Image::make($image)->save($location);
            $brand->image=$img;
        }
        $brand->save();
        Session::flash('success','Brand Added Successfully!!');
        return redirect()->route('brand.index');
    }
    public function brand_delete ($id){
        $brand=Brand::find($id);
        if (!is_null($brand)) {
            if (File::exists('BrandImage/'.$brand->image)){
                File::delete('BrandImage/'.$brand->image);
            }
            $brand->delete();
        }

        Session::flash('success',' Brand Created Successfully!!');
        return redirect()->back();
    }
    public function brand_edit($id){
        $brand=Brand::find($id);

        return view('backend.brand.edit',compact('brand'));
    }
    public function brand_update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required'
        ]);
        $brand=Brand::find($id);
        $brand->name=$request->name;
        $brand->description=$request->description;

        if ($request->image) {
            if (File::exists('BrandImage/'.$brand->image)){
                File::delete('BrandImage/'.$brand->image);
            }
            $image=$request->file('image');
            $img=time().$image->getClientOriginalName();
            $location=public_path('BrandImage/'.$img);
            Image::make($image)->save($location);
            $brand->image=$img;
        }

        $brand->update();
        Session::flash('success','Brand Updated Successfully!!');
        return redirect()->route('brand.index');
    }

}
