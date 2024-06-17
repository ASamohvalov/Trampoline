<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalogPage()
    {
        $products = Products::all();
        return view('pages.catalog', ['products' => $products]);
    }
}
