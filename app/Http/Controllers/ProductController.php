<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Products;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function catalogPage()
    {
        $products = Products::latest()->get();
        $categories = [];
        foreach ($products as $product) {
            if (!in_array($product->category, $categories)) {
                $categories[] = $product->category;
            }
        }
        return view('pages.catalog', ['products' => $products, 'categories' => $categories]);
    }

    public function productPage($id)
    {
        $product = Products::find($id);
        return view('pages.product', ['product' => $product]);
    }

    public function makeRequest($id_product)
    {
        $product = Products::find($id_product);
        return view('pages.request', ['product' => $product]);
    }

    public function sendOrder($id_product, Request $request)
    {
        $request->validate([
            'rental_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'address' => 'required|max:255',
            'birthday' => 'required',
            'passport_series' => 'required',
            'passport_id' => 'required',
            'passport_issue_date' => 'required',
            'passport_issue_by' => 'required',
        ]);

        $start_time = new DateTime($request->start_time);
        $end_time = new DateTime($request->end_time);

        $price = Products::select('price')->where('id', $id_product)->first()->price;

        $diff = intval($end_time->diff($start_time)->h);
        $final_price = $diff * $price * (1 - $this->calculateDiscount($diff) / 100);

        Order::create([
            'id_user' => Auth::user()->id,
            'id_product' => $id_product,
            'rental_date' => $request->rental_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'passport_series' => $request->passport_series,
            'passport_id' => $request->passport_id,
            'passport_issue_date' => $request->passport_issue_date,
            'passport_issue_by' => $request->passport_issue_by,
            'price' => $final_price
        ]);

        return redirect('/user');
    }

    private function calculateDiscount($h)
    {
        $discount = [
            5 => [3, 4],
            10 => [5, 7],
            15 => [8, 11],
            20 => [12, PHP_INT_MAX]
        ];

        foreach ($discount as $key => $value) {
            if ($value[0] >= $h && $value[1] <= $h) {
                return $key;
            }
        }
        return 0;
    }
}
