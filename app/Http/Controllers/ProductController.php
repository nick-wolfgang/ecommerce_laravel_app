<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(Request $req)
    {

        $user = $req->user();
        //$products = Products::query()->where('user_id', $user->id)->get();
        $category_list = Category::query()->get();
        $user = User::query()->get();
        // $product = Products::query()->get();
        $product = Products::all();
        return view('products.index', [
            'users' => $user,
            'products' => $product,
            'category_list' => $category_list,
        ]);
    }
    public function details($id)
    {
        $category_list = Category::query()->get();
        $product_all = Products::all();
        $product = Products::where('id', $id)->first();

        
        return view('products.details', [
            'product' => $product,
            'category_list' => $category_list,
            'products_all' => $product_all
        ]);
    }

   public function create()
   {
        return view('products.create');
   }
   public function edit()
   {
        return view('');
   }

   public function category($id)
   {
    
        $category_list = Category::query()->get();
        if(Category::where('id', $id)) {
            $category = Category::where('id', $id)->first();
            $products = Products::where('category_id', $category->id)->get();
            // dd($products);
            return view('products.index_cat', [
                'category' => $category,
                'products' => $products,
                'category_list' => $category_list
            ]);
        }
        else
            return redirect('products.index');
   }
   public function search_products(Request $req)
   {
        $category_list = Category::query()->get();
        $products = DB::table('products')->where('name', 'LIKE', "%$req->search%")->get();

        return view('products.pro_search', [
            'products' => $products,
            'category_list' => $category_list,
            'result' => "$req->search"
        ]);
   }
   public function rating(Request $req, $id)
   {
        $product = Products::find($id);
        // dd($req->rate);
        $product->rating_pts += $req->rate;
        $product->num_rates += 1.0;
        $product->rate = $product->rating_pts/$product->num_rates;
// dd($product->rate);
        $product->save();
        return redirect()->route('products.details', ['id' => $product->id,
        'product' => $product
    ]);
   }
   public function buy_product($id)
   {
        // dd('dfghjk');
        $product = Products::find($id);
        $product->quantity -= 1;
        // dd($product);
        $product->save();

        return redirect()->route('products.details', ['id' => $product->id]);
   }
}
