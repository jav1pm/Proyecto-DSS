<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showAll(Request $request) {
        $res = $request -> get('ordenarProduct');
        if(!$res){
            $res = 'id';
        }
        $products = Product::orderBy($res,'asc')->paginate(5);
        return view('products/productsIndex', compact('products'));
    }

    public function tienda(Request $request) {
        $res = $request -> get('ordenarProduct');
        if(!$res){
            $res = 'id';
        }
        $products = Product::orderBy($res,'asc')->paginate(8);
        return view('cliente/tienda', compact('products'));
    }

    public function showProduct($id){
        $product = Product::find($id);
        if(!$product)
        {
            return view('notFound');
        }
        return view('products/productsShow', ['product' => $product]);
    }

    public function buscarUnoPorId(){

        $id = request('id');
        $products = Product::all()->where('id',$id);
        return view('products/productsShowBy', compact('products'));

    }


    public function createProduct(){
        return view('products.productsCreate');
    }

    public function buscarUnoPorNombre() {
        $nombre = request('name');
        $products = Product::all()->where('nombre',$nombre);
        return view('products/productsShowBy', compact('products'));
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

    public function editProduct($id){
        $product = Product::findOrfail($id);

        return view('products.productsEdit', [
            'product' => $product
        ]);
    }

    public function updateProduct(Product $product){
        $product->update([
            'nombre' => request('name'),
            'descripcion' => request('descripcion'),
            'precio' => floatval(request('precio')),
            'imagen' => request('imagen'),
            'category_id' => intval(request('categoria')),


        ]);

            return redirect()->route('products.showProducts');
    }

    public function deleteProduct(Product $product){
        $product->delete();
        return redirect()->route('products.showProducts');
    }

}
