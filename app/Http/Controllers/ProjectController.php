<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProjectController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->limit(4)->get();

        $women_products = Product::where('type', 'women')->limit(4)->get();
        $men_products = Product::where('type', 'men')->limit(4)->get();
        
        return view('index', compact('products', 'women_products', 'men_products'));
    }

    public function about()
    {
        return  view('about');
    }
    public function contact()
    {
        return  view('contact');
    }
    public function products()
    {
        $products = Product::paginate(6); // paginate(6) -- vratice 6 proizvoda po strani

        return  view('products', ['products'=> $products]);
    }

   


}
