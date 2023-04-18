<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = Product::get();
        return view('dashboard',compact('data'));
    }
    public function add(){
        return view('addProduct');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'project_time'=>'required',
        ]);
        $name=$request->name;
        $title=$request->title;
        $project_time=$request->project_time;

        $product = new Product();
        $product->name=$name;
        $product->title=$title;
        $product->project_time=$project_time;

        $product->save();
        return redirect('dashboard');
    }

    public function edit($id){
        $data = Product::where('id','=',$id)->first();
        return view('edit-product',compact('data'));
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'project_time'=>'required',
        ]);
        $id= $request->id;
        $name = $request->name;
        $title = $request->title;
        $project_time = $request->project_time;
        Product::where('id', '=', $id)->update([
            'name'=>$name,
            'title'=>$title,
            'project_time'=>$project_time,
        ]);
        return redirect('dashboard');
    }
    public function destroy(Request $id)
    {
        $id->delete();  
        return redirect()->back();

    }

}
