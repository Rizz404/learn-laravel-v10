<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    function index()
    {
        return view('keranjang');
    }
}
