<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function phones(){
        $phones=Phone::orderBy('_id','desc')->get();
        return view("home",compact('phones'));
    }

    // add new mobile
    function create(){
        return view('create');
    }
    function store(Request $request){
        $request->validate([
            'image'=>'required',
            "name"=>'required',
            "company"=>'required',
            "price"=>'required',
            "year"=>'required',
            "memory"=>'required',
            "ram"=>'required',
        ]);
         $phone=new Phone();
        $phone->image=$request->image;
        $phone->name=$request->name;
        $phone->company=$request->company;
        $phone->price=$request->price;
        $phone->year=$request->year;
        $phone->memory=$request->memory;
        $phone->ram=$request->ram;

        $phone->save();
        return redirect()->route('index');
    }
    
    // delete functionality
    function destroy(string $id){
        $phone=Phone::find($id);
        $phone->delete();        
        return redirect()->route('index');
    }
    
    //update functionality
    function update(Request $request,string $id){
        $request->validate([
            'image'=>'required',
            "name"=>'required',
            "company"=>'required',
            "price"=>'required',
            "year"=>'required',
            "memory"=>'required',
            "ram"=>'required',
        ]);
        $phone=Phone::find($id); 
        $phone->image=$request->image;
        $phone->name=$request->name;
        $phone->company=$request->company;
        $phone->price=$request->price;
        $phone->year=$request->year;
        $phone->memory=$request->memory;
        $phone->ram=$request->ram;

        $phone->save();
        return redirect()->route('index');  
    }
    function edit(string $id){
        $phone=Phone::find($id);
        return view('update',compact('phone'));
    }
}
