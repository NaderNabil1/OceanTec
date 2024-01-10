<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('FrontEnd.Category.categories', compact('categories'));
    }

    // Product functions
    public function products( $slug){
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category',$category->id)->get();
        return view('FrontEnd.Category.products', compact('category', 'products'));
    }

    public function show($slug, $prodSlug){
        $category = Category::where('slug', $slug)->first();
        $product = Product::where('slug', $prodSlug)->first();
        return view('FrontEnd.Product.show', compact('category', 'product'));
    }
}
