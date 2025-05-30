<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index()
    {
        return view('postingan.index');
    }

    public function create()
    {
        return view('postingan.create');
    }
}
