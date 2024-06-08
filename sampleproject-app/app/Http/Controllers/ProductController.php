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
}
