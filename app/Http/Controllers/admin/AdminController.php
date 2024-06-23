<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class AdminController extends Controller
{
    public function adminPage()
    {
        $categories = Category::all();
        $products = Products::all();
        return view('pages.admin', ['categories' => $categories, 'products' => $products]);
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
        $category = Category::where('name', $request->remove_name)->withCount('products')->first();
        if ($category->products_count > 0) {
            return redirect()->back()->with(['remove_error' => "Категория '$request->remove_name' используется в продуктах и не может быть удалена"]);
        }

        $category->delete();
        return redirect()->back()->with(['remove_success' => "категория - '$request->remove_name' удалена"]);
    }

    public function putProduct(Request $request)
    {
        $request->validate([
            'new_product_name' => 'required|unique:products,name',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'size' => 'required',
            'power_consumption' => 'required',
            'capacity' => 'required',
            'installation_time' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ], [
            'new_product_name' => 'Название продукта должно быть уникальным',
            'image' => 'Ошибка загрузки файлов'
        ]);

        $id_category = Category::select('id')->where('name', $request->category)->first()->id;
        Products::create([
            'name' => $request->new_product_name,
            'price' => $request->price,
            'description' => $request->description,
            'id_category' => $id_category,
            'size' => $request->size,
            'power_consumption' => $request->power_consumption,
            'capacity' => $request->capacity,
            'installation_time' => $request->installation_time,
            'image' => $this->fileProcess($request->image)
        ]);

        return redirect()->back()->with(['new_product_success' => 'Продукт добавлен']);
    }

    public function removeProduct(Request $request)
    {
        $request->validate([
            'remove_product_name' => 'required'
        ]);

        $product = new Products();
        $this->fileRemove(
            $product->select('image')->where('name', $request->remove_product_name)->first()->image
        );

        $product->where('name', $request->remove_product_name)->delete();
        return redirect()->back()->with(['remove_product_success' => 'Продукт удален']);
    }
    
    
    private function fileProcess($file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;
        $file->move(public_path('/assets/images/product'), $filename);
        return '/assets/images/product/' . $filename;
    }
    
    private function fileRemove($filename)
    {       
        File::delete(public_path($filename));
    }
}
