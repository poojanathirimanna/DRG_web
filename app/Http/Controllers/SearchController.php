<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $product = Product::where('title', 'like', '%'.$search.'%')
                          ->orWhereHas('category', function ($query) use ($search) {
                              $query->where('category_name', 'like', '%'.$search.'%');
                          })
                          ->paginate(3);

        return view('admin.view_product', compact('product'));
    }
}
