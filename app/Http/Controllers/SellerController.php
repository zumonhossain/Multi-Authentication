<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller{
    public function sellerLoginForm(){
        return view('seller.seller_login');
    }
}
