<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('FrontEnd.Account.myAccount', compact('user'));
    }

    public function edit(request $request){
        $user = Auth::user();
        if($request->isMethod('post')){
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return back();
        }
        return view('FrontEnd.Account.editAccount', compact('user'));
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return back();
    }
}
