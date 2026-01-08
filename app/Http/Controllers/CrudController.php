<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CrudController extends Controller
{
    public function create(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:products,email',
            'phone' => 'required|integer',
            'description' => 'required',
        ]);
    
        $product = new Product();
        $product->name = $request->name;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->description = $request->description;
        if($request->hasFile('image')){
            $fileName = uniqid() . '_' . rand() . '.' . $request->file('image')->extension();
            $location = public_path('uploads');
            $request->file('image')->move($location, $fileName);
            $product->image = $fileName;
        }
        $product->save();
        if($product) {
            return redirect()->route('show');
        }

    }

    public function show(){
        $products = Product::all();
        return view('show', compact('products'));
    }

    public function edit($id){
        $product = Product::find($id);
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:products,email',
            'phone' => 'required|integer',
            'description' => 'required',
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->description = $request->description;
        if($request->hasFile('image')){
            $existingImage = public_path('uploads/') . $product->image;
            if(file_exists($existingImage)){
                unlink($existingImage);
            }
            $fileName = uniqid() . '_' . rand() . '.' . $request->file('image')->extension();
            $location = public_path('uploads');
            $request->file('image')->move($location, $fileName);
            $product->image = $fileName;
        }
        $product->save();
        return redirect()->route('show');
    }

    public function productDelete($id){
        $product = Product::find($id);
        $existingImage = public_path('uploads/') . $product->image;
        if(file_exists($existingImage)){
            unlink($existingImage);
        }
        $product->delete();
        return back();
    }
}
