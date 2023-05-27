<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'halo gesss! jangn lupa like & Subscribe';
});

route::redirect('/nama', '/hello');

route::fallback(function() {
return'Halaman ini tidak ada';
});

Route::get('/conflict/nokia', function () {
    return view('nama barang saya Nokia');
});

Route::get('/items/{merk}', function ($id) {
return $id;
});

Route::get('/conflict/{nama}', function ($namaitem) {
    return 'Nama Barang :' . $namaitem;
});

Route::get('/produk', [ProdukController::class,'index']);

