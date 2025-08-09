<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_bestseller', true)->take(3)->get();
        $allProducts = Product::take(9)->get();
        
        return view('home', compact('featuredProducts', 'allProducts'));
    }
}