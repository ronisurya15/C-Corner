<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function ListContent()
    {
        return view('content.tampil');
    }
    public function TambahContent()
    {
        return view('content.tambah');
    }
    public function EditContent()
    {
        return view('content.edit');
    }
}
