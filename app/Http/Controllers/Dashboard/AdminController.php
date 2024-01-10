<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
        $admins = User::where('role','Admin')->get();
        return view('Dashboard.Admin.index', compact('admins'));
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
                'role' => 'Admin',
            ]);
            return redirect()->route('be-admins');
        }
        return view('Dashboard.Admin.add');
    }

    public function edit(request $request, $id){
        $admin = User::find($id);
        if($request->isMethod('post')){
            $request->validate([
                'first_name' => ['required', 'string'],
                'last_name' => ['required', 'string'],
                'phone' => ['required'],
            ]);
            $admin->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
            ]);
            return back();
        }
        return view('Dashboard.Admin.edit', compact('admin'));
    }

    public function delete($id){
        $admin = User::find($id);
        if($admin != NULL){
            $admin->delete();
        }
        return back();
    }
}
