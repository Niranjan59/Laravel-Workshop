<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $products = Product::all();
        //dd($products);
        return view('welcome', compact('products'));
    }
    public function about()
    {
        return view('about');
    }
    public function product()
    {
        return view('product');
    }

    public function storeproduct(Request $request)
    {
        $data = $request->all();
        Product::create($data);
        return redirect(route('home'));
    }
}
