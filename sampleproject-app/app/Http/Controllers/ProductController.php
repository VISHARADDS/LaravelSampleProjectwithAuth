<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    
    public function index()
    {
        $products =Product::orderBy('id','desc')->get();
        $total=Product::count();
        return view('admin.product.home', compact(['products','total']));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    {
        $validation =$request->validate([

            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);

        $data = Product::create($validation);
        if($data){
            session()->flash('success','Product added successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error','Error adding the product');
            return redirect(route('admin/products/create'));
        }

      
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function update(Request $request ,$id){
        $products = Product::findOrFail($id);
        $name=$request->name;
        $price=$request->price;
        $quantity=$request->quantity;
        $description=$request->description;

        $products->name =$name;
        $products->price =$price;
        $products->quantity =$quantity;
        $products->description =$description;
        $data= $products->save();

        if($data){
            session()->flash('success','Product updated successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error','Error updating the product');
            return redirect(route('admin/products/update'));
        }
        
    }

    //delete
    public function delete($id)
{
    $product = Product::findOrFail($id);
    if ($product->delete()) {
        session()->flash('success', 'Product deleted successfully');
        return redirect()->route('admin/products');
    } else {
        session()->flash('error', 'Error deleting the product');
        return redirect()->route('admin/products');
    }
}


}
