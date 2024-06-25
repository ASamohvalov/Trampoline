<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalogPage()
    {
        $products = Products::all();
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
}
