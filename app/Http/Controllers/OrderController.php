<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function ordersPage()
    {
        // if (!Auth::user()->isAdmin()) {
        //     return redirect('/user');
        // }
        $orders = Order::latest()->get();
        return view('pages.admin.orders', ['orders' => $orders]);
    }

    public function orderPage($id) 
    {
        // if (!Auth::user()->isAdmin()) {
        //     return redirect('/user');
        // }
        $order = Order::find($id);
        return view('pages.admin.questionnaire', ['order' => $order]);
    }

    public function changeOrderStatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', "Статус успешно изменнен на $request->status");
    }
}
