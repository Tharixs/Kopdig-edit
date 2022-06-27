<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoperasiController extends Controller
{
    public function index()
    {
        return view('pages.koperasi.market.index');
    }
}
