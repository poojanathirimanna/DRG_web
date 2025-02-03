<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;


class AdminController extends Controller
{

    // View Category
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }


    // Add Category
    public function add_category(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category;
        $category->save();
        
       
        flash()
        ->timeOut(7000)
        ->success('Product Category Added Successfully.');
                
        return redirect('view_category');   
    }

    
    // Delete Category
    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();

        flash()
        ->timeOut(7000)
        ->success('Product Category Deleted Successfully.');

        return redirect('view_category');  
    }


    // Edit Category
    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    
    // Update Category  
    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();

        flash()
        ->timeOut(7000)
        ->success('Product Category Updated Successfully.');

        return redirect('view_category');  
    }

    // Add Product
    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }
    
    // Upload Product
    public function upload_product(Request $request)
    {
       $data = new Product();
       $data->title = $request->title;
       $data->description = $request->description;
       $data->price = $request->price;
       $data->quantity = $request->qty;
       $data->category = $request->category;
     
       $image = $request->image;

       if($image)
       {
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('products', $imageName);
           $data->image = $imageName;
       }
       else
       {
           $data->image = 'noimage.jpg';
       }

       $data->save();

        flash()
        ->timeOut(7000)
        ->success('Product Added Successfully.');

        return redirect('add_product');  
    }

    // View Product
    public function view_product()
    {
        $product = Product::paginate(3);
        return view('admin.view_product', compact('product'));
    }

    // Delete Product
    public function delete_product($id)
    {
        $data = Product::find($id);
        $image_path = public_path('products/'.$data->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $data->delete();

        flash()
        ->timeOut(7000)
        ->success('Product Deleted Successfully.');

        return redirect('view_product');  
    }

    // Edit Product
    public function edit_product($id)
    {
        $data = Product::find($id);
        $category = Category::all();
        return view('admin.edit_product', compact('data', 'category'));
    }

    // Update Product
    public function update_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;
      
        $image = $request->image;

        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products', $imageName);
            $data->image = $imageName;
        }
       
        $data->save();

        flash()
        ->timeOut(7000)
        ->success('Product Updated Successfully.');

        return redirect('view_product');  
    }   

    // Product Search
    public function product_search(Request $request)
    {
        $search = $request->search;
        $product = Product::where('title', 'like', '%'.$search.'%')->orWhere('category', 'like', '%'.$search.'%')->paginate(3);
        return view('admin.view_product', compact('product'));
    }

    // View Order
    public function view_order()
    {
        $data = Order::all();
       
        return view('admin.order', compact('data'));
    }

    // Canceled Order
    public function canceled($id)
    {
       $data = Order::find($id);
       $data->status = 'canceled';
       $data->save();

       return redirect('/view_orders');

    }

    // Delivered Order
    public function delivered($id)
    {
       $data = Order::find($id);
       $data->status = 'delivered';
       $data->save();

       return redirect('/view_orders');

    }

}
