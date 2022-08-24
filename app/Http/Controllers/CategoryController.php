<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function view_categories()
    {
        $cats = Category::all();
        return view('admin.categories', [
            'cats' => $cats
        ]);
    }
    public function delete_category($id)
    {
        Category::where('id', $id)->delete();
        $cats = Category::all();
        return view('admin.categories', [
            'cats' => $cats
        ]);
    }
    public function save_category(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'unique:categories,name'],
        ]);
        $category = Category::query()->create([
            'name' => $request['name']
        ]);
        $category->save();
        $cats = Category::all();
        // dd($category);
        return view('admin.categories', [
            'cats' => $cats
        ]);
    }
    public function edit_category()
    {
        
    }
}
