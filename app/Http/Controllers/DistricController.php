<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Distric;
use App\Division;

class DistricController extends Controller
{
public function index(){
        $distric=Distric::orderBy('id','desc')->get();
        return view('backend.distric.index',compact('distric'));
    }
    public function distric_add(){
        $division=Division::all();
        return view('backend.distric.create',compact('division'));
    }
    public function distric_store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:districs',
            'division_id'=>'required'

        ]);
        $distric=new Distric();
        $distric->name=$request->name;
        $distric->division_id=$request->division_id;


        $distric->save();
        Session::flash('success','Distric Added Successfully!!');
        return redirect()->route('distric.index');
    }
    public function distric_edit($id){
        $distric=Distric::find($id);
        $division=Division::all();

        return view('backend.distric.edit',compact('distric','division'));
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
    public function distric_delete($id){
        $distric=Distric::find($id);
        $distric->delete();

        Session::flash('success',' Distric Deleted Successfully!!');
        return redirect()->back();
    }
}
