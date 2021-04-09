<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showAll() {
        $products = Product::all();
        return view('products/productsIndex', compact('products'));
    }
}
