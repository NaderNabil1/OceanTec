<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    
    }
    public function index(){
        $categories = Category::get();
        return view('Dashboard.Category.index', compact('categories'));
    }

    public function add(request $request){
        if($request->isMethod('post')){
            $request->validate([
                'title' => ['required'],
            ]);

            $slug = Str::slug($request->title, '-');

            $image = $request->image;
            if( $image != NULL ){
                $image_path = $image->storeAs('categories', $slug . '-' . date('mdYHis') . '.' . $image->getClientOriginalExtension(), 'image');
            } else {
                $image_path = NULL;
            }

            Category::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_path,
                'slug' => $slug,
            ]);
            return redirect()->route('be-categories');
        }
        return view('Dashboard.Category.add');
    }

    public function edit(request $request, $id){
        $category = Category::find($id);
        if($request->isMethod('post')){
            $request->validate([
                'title' => ['required'],
            ]);
            $slug = Str::slug($request->title, '-');

            $image = $request->image;
            if( $image != NULL ){
                if($category->image != NULL){
                    unlink("uploads/".$category->image);
                }
                $image_path = $image->storeAs('categories', $slug . '-' . date('mdYHis') . '.' . $image->getClientOriginalExtension(), 'image');
            } else {
                $image_path = $category->image;
            }

            $category->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_path,
                'slug' => $slug,
            ]);
            return back();
        }
        return view('Dashboard.Category.edit', compact('category'));
    }

    public function delete($id){
        $category = Category::find($id);
        if($category != NULL){
            if($category->image != NULL){
                unlink("uploads/".$category->image);
            }
            $category->delete();
        }
        return back();
    }
}
