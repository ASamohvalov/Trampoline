<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPage()
    {
        $category = Category::all();
        return view('pages.admin', ['categories' => $category]);
    }

    public function putCategory(Request $request)
    {
        $request->validate([
            'add_name' => 'required|unique:categories,name'
        ], [
            'add_name' => 'такая категория уже есть'
        ]);

        $category = new Category();
        $category->name = $request->add_name;
        $category->save();

        return redirect()->back()->with(['add_success' => "новая категория - '$request->add_name' добавлена"]);
    }

    public function removeCategory(Request $request)
    {
        $request->validate([
            'remove_name' => 'required|exists:categories,name'
        ], [
            'remove_name' => 'Такой категории нет'
        ]);

        Category::where('name', $request->remove_name)->delete();
        return redirect()->back()->with(['remove_success' => "категория - '$request->remove_name' удалена"]);
    }

    public function putProduct(Request $request)
    {
        $request->validate([
            'new_product_name' => 'required|unique:products,name',
            'price' => 'required',
            'description' => 'required',
            'categoty' => 'required'
        ]);

        $id_category = Category::select('id')->where('name', '=', $request->category)->get();
        Products::insert([
            'name' => $request->name, 
            'price' => $request->price, 
            'description' => $request->description,
            'id_category' => $id_category
        ]);

        return redirect()->back()->with(['new_product_success' => "Продукт добавлен"]);
    }

    public function removeProduct(Request $request) 
    {
        
    }
}
