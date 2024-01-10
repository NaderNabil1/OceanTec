<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    
    }
    public function index(){
        $products = Product::count();
        $categories = Category::count();
        $users = User::where('role','User')->count();
        $admins = User::where('role','Admin')->count();
        return view('Dashboard.Dashboard.index',compact('products','categories','users','admins'));
    }
}
