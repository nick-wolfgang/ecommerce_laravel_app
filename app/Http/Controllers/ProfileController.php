<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $products = Products::query()->where('user_id', $user->id)->get();
        return view('profile.index', ['products' => $products]);        
    }
    public function create()
    {
        $cats = Category::query()->get();
        return view('profile.create', [
            'cats' => $cats
        ]);
    }

    public function save(Request $request)
    {
        $user = $request->user();
        $this->validate($request, [
            'name' => ['required', 'unique:products,name'],
            'description' => ['required'],
            'quantity' => ['required', 'integer'],
        ]);
        $product = Products::query()->create(array_merge($request->except(['_token']), ["user_id" => $user->id]));
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $filename = date('YmdHi') . "_" . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path =  "images/" . $filename;
            $product->update(['image' => $path]);
        }
        $product->save();
        return  redirect(route('profile.index'));
    }
    public function edit($id)
    {
        $product = Products::find($id);
        return view('profile.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $req, $id)
    {
        Products::find($id)->update($req->all());
        return redirect()->route('profile.index');
    }

    public function delete($id)
    {
        Products::find($id)->delete();
        return redirect()->route('profile.index');
    }
    public function get_help()
    {
        return view('profile.help');
    }
    // public function save_help()
    // {
        
    // }
}


