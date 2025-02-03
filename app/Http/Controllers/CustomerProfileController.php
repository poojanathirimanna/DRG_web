<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CustomerProfileController extends Controller
{
    /**
     * Show customer profile.
     */
    public function show()
    {
        $user = auth()->user();
        // Get the authenticated customer

        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
        }
        else
        {
            $count = '';
        }
        return view('profile.show', compact('user','count'));
    }

    /**
     * Update customer profile.
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'string|max:255',
            'address' => 'string|max:255',
        ]);

        $user->update($request->all());

        // Flash success message
        session()->flash('success', 'Profile updated successfully.');

        return redirect()->route('profile.show');
    }
   

    
    
}
