<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function index()
    {

        return view('master.shop');
    }
}
