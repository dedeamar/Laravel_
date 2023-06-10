<?php

use App\Http\Controllers\customercontroller;
use App\Http\Controllers\customerModalController;
use App\Http\Controllers\itemcontroller;
use App\Http\Controllers\Landingcontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\shopcontroller;
use App\Http\Controllers\master\ProdukController;
use App\Http\Controllers\Registercontroller;
use Illuminate\Support\Facades\Route;

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
     return view('landing');
 });
 Route::get('/dashboard', function () {
    return view('dashboard');
});
//shop
Route::get('/shop', function () {
    return view('shop');
});
// Practice Route

Route::get('/hello', function() {
    return 'Halo Ges';
});

Route::redirect('/nama', '/hello');

Route::fallback(function() {
    return 'Halaman tidak ada bro';
});

Route::get('/conflict/nokia', function() {
    return 'Nama barang saya nokia';
});

Route::get('/items/{merk}', function($id) {
    return $id;
});

Route::get('/conflict/{nama}', function($namaitem) {
    return 'Nama Barang : ' . $namaitem;
});
Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/home', [LandingController::class, 'index']);
// View
// Route Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route Registrasi
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route Customer
Route::get('/customer', [CustomerController::class, 'index'])->middleware('auth');
Route::get('/customer-create', [CustomerController::class, 'create'])->middleware('auth');
Route::post('/customer-store', [CustomerController::class, 'store'])->middleware('auth');
Route::put('/customer-update', [CustomerController::class, 'update'])->middleware('auth');
Route::get('/customer-edit/{id}', [CustomerController::class, 'edit'])->middleware('auth');
Route::get('/customer-delete/{id}', [CustomerController::class, 'delete'])->middleware('auth');

// Route Customer Modal
Route::get('/modal/customer', [CustomerModalController::class, 'index'])->middleware('auth');
Route::get('/modal/customer-create', [CustomerModalController::class, 'create'])->middleware('auth');
Route::post('/modal/customer-store', [CustomerModalController::class, 'store'])->middleware('auth');
Route::put('/modal/customer-update', [CustomerModalController::class, 'update'])->middleware('auth');
Route::get('/modal/customer-edit/{id}', [CustomerModalController::class, 'edit'])->middleware('auth');
Route::get('/modal/customer-delete/{id}', [CustomerModalController::class, 'delete'])->middleware('auth');



