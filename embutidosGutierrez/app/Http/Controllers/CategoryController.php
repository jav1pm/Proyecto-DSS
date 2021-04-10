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
    public function showCategory($nombre){
        $category = Category::query()
        ->select(['*'])
        ->with('nombre')
        ->get();
        return view('categories/categoriesShow', compact('category'));
    }
}
