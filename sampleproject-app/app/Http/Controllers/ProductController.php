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
    $validation = $request->validate([
        'name' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'description' => 'required',
        'photo' => 'mimes:png,jpeg,jpg|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = time() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'), $photoName);
        $validation['photo'] = $photoName;
    }

    $data = Product::create($validation);
    if ($data) {
        session()->flash('success', 'Product added successfully');
        return redirect(route('admin/products'));
    } else {
        session()->flash('error', 'Error adding the product');
        return redirect(route('admin/products/create'));
    }
}

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    //update
    public function update(Request $request, $id)
{
    $products = Product::findOrFail($id);

    $validation = $request->validate([
        'name' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'description' => 'required',
        'photo' => 'mimes:png,jpeg,jpg|max:2048',
    ]);

    $products->name = $validation['name'];
    $products->price = $validation['price'];
    $products->quantity = $validation['quantity'];
    $products->description = $validation['description'];

    if ($request->hasFile('photo')) {
        // Delete the old photo if it exists
        if ($products->photo) {
            $oldPhotoPath = public_path('uploads/' . $products->photo);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
        }

        $photo = $request->file('photo');
        $photoName = time() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'), $photoName);
        $products->photo = $photoName;
    }

    $data = $products->save();

    if ($data) {
        session()->flash('success', 'Product updated successfully');
        return redirect(route('admin/products'));
    } else {
        session()->flash('error', 'Error updating the product');
        return redirect(route('admin/products/update', $id));
    }
}

    //delete
    public function delete($id)
{
    $product = Product::findOrFail($id);
    if ($product->photo) {
        $photoPath = public_path('uploads/' . $product->photo);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }
    }
    if ($product->delete()) {
        session()->flash('success', 'Product deleted successfully');
        return redirect()->route('admin/products');
    } else {
        session()->flash('error', 'Error deleting the product');
        return redirect()->route('admin/products');
    }
}


}
