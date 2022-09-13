<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use App\Providers\AdminProvider;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //

    public function adminHome()
    {
        return view('admin.home');
    }
    public function users()
    {
        $users = User::paginate(9)->withPath('/admin/users');
        return view('admin.users', [
            'users' => $users
        ]);
    }
    public function products()
    {
        $products = Products::paginate(9)->withPath('/admin/products');
        return view('admin.products', [
            'products' => $products,
        ]);
    }
    
    public function delete_product($id)
    {        
        if(Products::find($id))
            Products::find($id)->delete();
        return redirect()->route('view_products');
    }
    public function delete_user($id)
    {
        
        if(User::find($id))
            User::find($id)->delete();
        return redirect()->route('view_users')->with(['message' => 'Successfully Deleted']);
    }
    public function view_categories()
    {
        $cats = Category::paginate(5)->withPath('/admin/categories');
        return view('admin.categories', [
            'cats' => $cats
        ]);
    }
    public function admin_search(Request $req)
    {
        $products = DB::table('products')->where('name', 'LIKE', "%$req->search%")->get();
        $users = DB::table('users')->where('name', 'LIKE', "%$req->search%")->get();

        return view('admin.admin_search', [
            'products' => $products,
            'users' => $users,
            'result' => "$req->search"
        ]);

    }
    public function view_user($id)
    {
        if(User::find($id))
            $user = User::find($id);
        return view('');
    }
    public function view_product($id)
    {
        if(Products::find($id))
            $product = Products::find($id);
        return view('admin.view_prod', [
            'product' => $product
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/products');
    }
}
