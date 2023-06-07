<?php

use App\Http\Controllers\customercontroller;
use App\Http\Controllers\customerModalController;
use App\Http\Controllers\itemcontroller;
use App\Http\Controllers\Landingcontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Produkcontroller;
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
     return view('welcome');
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
Route::get('/produk', function() {
    return view('product');
});

Route::get('/curd', function() {
    return view('curd');
});
Route::get('/login', function() {
    return view('login');
});
// Route::get('/produk', [ItemController::class, 'item']);

// View




