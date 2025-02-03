<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // View Orders
    public function view_order()
{
    $data = Order::all(); // Retrieve all orders
    return view('admin.order', compact('data')); // Pass the data to the view
}


    // Cancel Order
    public function cancel($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'canceled';
        $order->save();

        return redirect()->route('orders.index');
    }

    // Mark as Delivered
    public function deliver($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'delivered';
        $order->save();

        return redirect()->route('orders.index');
    }
}
