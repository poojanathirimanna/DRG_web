<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // View Products
    public function index()
    {
        $product = Product::paginate(3);
        return view('admin.view_product', compact('product'));
    }

    // Show Add Product Form
    public function create()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    // Store Product
    public function store(Request $request)
    {
        $data = new Product();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->quantity = $request->qty;
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('products'), $imageName);
            $data->image = $imageName;
        } else {
            $data->image = 'noimage.jpg';
        }
    
        $data->save();
    
        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }
    


    // Delete Product
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $image_path = public_path('products/'.$data->image);

        if(file_exists($image_path)) {
            unlink($image_path);
        }

        $data->delete();
        session()->flash('success', 'Product Deleted Successfully.');

        return redirect()->route('products.index');  
    }

    // Edit Product
    public function edit($id)
    {
        $data = Product::findOrFail($id);
        $category = Category::all();
        return view('admin.edit_product', compact('data', 'category'));
    }

    // Update Product
    public function update(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category = $request->category;   
        $data->price = $request->price;
        $data->quantity = $request->qty;
        // $data->category_id = $request->category;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('products'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        session()->flash('success', 'Product Updated Successfully.');

        return redirect()->route('products.index');  
    }


    
}
