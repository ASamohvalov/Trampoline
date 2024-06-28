<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userPage()
    {
        $orders = Order::where('id_user', Auth::user()->id)
            ->latest()
            ->get();
        return view('pages.user.user', ['orders' => $orders]);
    }

    public function deleteOrder($id)
    {
        Order::find($id)->delete();
        return redirect()->back();
    }

    public function review(Request $request)
    {
        $request->validate([
            'review' => 'required'
        ]);

        Review::create([
            'id_user' => Auth::user()->id,
            'review' => $request->review,
        ]);

        return redirect()->back();
    }
}
