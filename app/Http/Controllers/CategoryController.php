<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // View Categories
    public function index()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    // Add Category
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category;
        $category->save();
        
        session()->flash('success', 'Product Category Added Successfully.');
                
        return redirect()->route('categories.index');   
    }

    // Delete Category
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        session()->flash('success', 'Product Category Deleted Successfully.');

        return redirect()->route('categories.index');  
    }

    // Edit Category
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.edit_category', compact('data'));
    }

    // Update Category  
    public function update(Request $request, $id)
    {
        $data = Category::findOrFail($id);
        $data->category_name = $request->category;
        $data->save();

        session()->flash('success', 'Product Category Updated Successfully.');

        return redirect()->route('categories.index');  
    }
}
