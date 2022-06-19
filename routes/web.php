<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');






/* ------------- Admin Route Start -------------- */

Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'loginForm'])->name('login_from');
    Route::post('/login/owner', [AdminController::class, 'adminLogin'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/register', [AdminController::class, 'adminRegister'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'adminRegisterCreate'])->name('admin.register.create');
});

/* ------------- Admin Route End -------------- */






/* ------------- Seller Route Start -------------- */

Route::prefix('seller')->group(function(){
    Route::get('/login', [SellerController::class, 'sellerLoginForm'])->name('seller_login_from');
});

/* ------------- Seller Route End -------------- */











require __DIR__.'/auth.php';
