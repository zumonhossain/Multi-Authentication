<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
