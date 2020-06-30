<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use Session;
use Image;
use File;
class CategoryController extends Controller
{
    public function index(){
        $category=Category::orderBy('id','desc')->get();
        return view('backend.category.index',compact('category'));
    }
    public function category_delete($id){
        $category=Category::find($id);
        if (!is_null($category)) {

           if ($category->parent_id==NULL) {
            $sub_category=Category::OrderBy('name','desc')->where('parent_id',$category->id)->get();
            foreach ($sub_category as $sub) {
                if (File::exists('CategoryImage/'.$sub->image)){
                    File::delete('CategoryImage/'.$sub->image);
                }
                $sub->delete();

            }
        }
        if (File::exists('CategoryImage/'.$category->image)){
            File::delete('CategoryImage/'.$category->image);
        }
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
public function category_update(Request $request,$id){
    $this->validate($request,[
        'name'=>'required',
        'description'=>'required'
    ]);
    $category=Category::find($id);
    $category->name=$request->name;
    $category->description=$request->description;
    $category->parent_id=$request->parent_id;
    if ($request->image) {
        if (File::exists('CategoryImage/'.$category->image)){
            File::delete('CategoryImage/'.$category->image);
        }
        $image=$request->file('image');
        $img=time().$image->getClientOriginalName();
        $location=public_path('CategoryImage/'.$img);
        Image::make($image)->save($location);
        $category->image=$img;
    }

    $category->update();
    Session::flash('success','Category Updated Successfully!!');
    return redirect()->route('category.index');
}
}
