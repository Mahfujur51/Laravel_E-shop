<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\Distric;
use Session;

class DivisionController extends Controller
{
    public function index(){
        $division=Division::orderBy('id','desc')->get();
        return view('backend.division.index',compact('division'));
    }
    public function division_add(){

        return view('backend.division.create');
    }
    public function division_store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:divisions',
            'piority'=>'required'

        ]);
        $division=new Division();
        $division->name=$request->name;
        $division->piority=$request->piority;


        $division->save();
        Session::flash('success','Division Added Successfully!!');
        return redirect()->route('division.index');
    }
    public function division_edit($id){
        $division=Division::find($id);

        return view('backend.division.edit',compact('division'));
    }
    public function division_update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'piority'=>'required'
        ]);
        $division=Division::find($id);
        $division->name=$request->name;
        $division->piority=$request->piority;



        $division->update();
        Session::flash('success','Division Updated Successfully!!');
        return redirect()->route('division.index');
    }
    public function division_delete ($id){
        $division=Division::find($id);
        if (!is_null($division)) {
            $distric=Distric::where('division_id',$division->id)->get();
            foreach ($distric as $districs) {
                $districs->delete();
            }
        }
        $division->delete();

        Session::flash('success',' Division Deleted Successfully!!');
        return redirect()->back();
    }
}
