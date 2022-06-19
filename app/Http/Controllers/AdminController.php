<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Carbon\Carbon;
use Auth;



class AdminController extends Controller{
    public function loginForm(){
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function adminLogin(Request $request){
        // dd($request->all());

        $check = $request->all();
        
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'] ])){
            return redirect()->route('admin.dashboard')->with('error', 'Admin Login Successfully');
        }
        else{
            return redirect()->route('admin.dashboard')->with('error', 'Invalid Email Or Password');
        }
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();

        return redirect()->route('login_from')->with('error', 'Admin Logout Successfully');
    }

    public function adminRegister(){
        return view('admin.admin_register');
    }

    public function adminRegisterCreate(Request $request){
        Admin::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('login_from')->with('error', 'Admin Created Successfully');
    }
}
