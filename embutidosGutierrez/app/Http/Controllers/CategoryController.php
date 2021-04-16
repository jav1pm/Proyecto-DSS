<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function showAll(){
        $categories = Category::all();
        return view('categories/categoriesIndex', compact('categories'));
    }

    public function showCategory($id){
        $category = Category::findOrFail($id);
        return view('categories/categoriesShow', ['category' => $category]);
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category -> delete();
        return redirect()->route('categories.showCategories');
    }
}
