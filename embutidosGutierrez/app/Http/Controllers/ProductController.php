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

    public function showProduct($id){
        $product = Product::findOrfail($id);
        return view('products/productsShow', ['product' => $product]);
    }

    public function createProduct(){
        return view('products.productsCreate');
    }

    public function storeProducts(){
    

        Product::create([

            'nombre' => request('name'),
            'descripcion' => request('descripcion'),
            'precio' => floatval(request('precio')),
            'imagen' => request('imagen'),
            'category_id' => intval(request('categoria')),

        ]);

        

        return redirect()->route('products.showProducts');

    }

}
