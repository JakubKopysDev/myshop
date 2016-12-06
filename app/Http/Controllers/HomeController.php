<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
}