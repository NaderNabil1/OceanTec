<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('Dashboard.Product.index', compact('products'));
    }

    public function add(request $request){
        $categories = Category::all();
        if($request->isMethod('post')){
            $slug = Str::slug($request->title, '-');

            $image = $request->image;
            if( $image != NULL ){
                $image_path = $image->storeAs('products', $slug . '-' . date('mdYHis') . '.' . $image->getClientOriginalExtension(), 'image');
            } else {
                $image_path = NULL;
            }

            $request->validate([
                'title' => ['required'],
                'category' => ['required'],
                'price' => ['required'],
            ]);

            $product = Product::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_path,
                'category' => $request->category,
                'price' => $request->price,
                'slug' => $slug,
            ]);

            return redirect()->route('be-products');
        }
        return view('Dashboard.Product.add', compact('categories'));
    }

    public function edit(request $request, $id){
        $product = Product::find($id);
        $categories = Category::get();
       
        if($request->isMethod('post')){
            

            $slug = Str::slug($request->title, '-');

            $image = $request->image;
            if( $image != NULL ){
                $image_path = $image->storeAs('products', $slug . '-' . date('mdYHis') . '.' . $image->getClientOriginalExtension(), 'image');
            } else {
                $image_path = $product->image;
            }

            $request->validate([
                'title' => ['required'],
                'category' => ['required'],
                'price' => ['required'],
            ]);

            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_path,
                'category' => $request->category,
                'price' => $request->price,
            ]);
        }
        return view('Dashboard.Product.edit', compact('product', 'categories'));
    }

    public function delete($id){
        $product = Product::find($id);
        if($product != NULL){
            $product->delete();
        }
        return back();
    }
}
