<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function newest()
    {
        $products = Product::orderBy('id', 'desc')->paginate(6);
        
        return view('products', ['products' => $products]);
    }

    public function lowestPrice()
    {
        $products = Product::orderBy('price', 'asc')->paginate(6);
        
        return view('products', ['products' => $products]);
    }

    public function highestPrice()
    {
        $products = Product::orderBy('price', 'desc')->paginate(6);
        
        return view('products', ['products' => $products]);
    }

    public function menClothing()
    {
        $products = Product::where('type', 'men')->paginate(6);
        
        return view('products', ['products' => $products]); 
    }

    public function womenClothing()
    {
        $products = Product::where('type', 'women')->paginate(6);
        
        return view('products', ['products' => $products]); 
    }
}
