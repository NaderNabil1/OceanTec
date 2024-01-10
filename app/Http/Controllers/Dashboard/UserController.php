<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
        $users = User::where('role','User')->get();
        return view('Dashboard.User.index', compact('users'));
    }

    public function add(request $request){
        if($request->isMethod('post')){
            $request->validate([
                'first_name' => ['required', 'string'],
                'last_name' => ['required', 'string'],
                'email' => ['required', 'email', 'unique:users,email'],
                'phone' => ['required'],
                'password' => ['required'],
            ]);
            User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'role' => 'User',
            ]);
            return redirect()->route('users');
        }
        return view('Dashboard.User.add');
    }

    public function edit(request $request, $id){
        $user = User::find($id);
        if($request->isMethod('post')){
            $request->validate([
                'first_name' => ['required', 'string'],
                'last_name' => ['required', 'string'],
                'phone' => ['required'],
            ]);
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return back();
        }
        return view('Dashboard.User.edit', compact('user'));
    }
    public function delete($id){
        $user = User::find($id);
        if($user != NULL){
            $user->delete();
        }
        return back();
    }
}
