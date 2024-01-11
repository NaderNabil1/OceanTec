<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Product;

class PageController extends Controller
{
    public function home(){
        $page = Page::find(1);
        $products = Product::all();
        return view('FrontEnd.Page.index', compact('page','products'));
    }
}
