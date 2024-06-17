<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPage()
    {
        return view('admin.admin');
    }

    public function putCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with(['add_success' => "новая категория - $request->name добавлена"]);
    }

    public function removeCategory(Request $request) 
    {
        $request->validate([
            'name' => 'required|exists:categories'
        ], [
            'name' => 'Такой категории нет'
        ]);

        Category::where('name', $request->name)->delete();
        return redirect()->back()->with(['remove_success' => "категория - $request->name удалена"]);
    }
}
