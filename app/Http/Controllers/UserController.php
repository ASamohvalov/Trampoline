<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userPage()
    {
        $orders = Order::where('id_user', Auth::user()->id)
            ->latest()
            ->get();
        return view('pages.user', ['orders' => $orders]);
    }
}
