<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.index');
    }

    public function pengurus()
    {
        return view('pages.admin.pengurus');
    }
}
