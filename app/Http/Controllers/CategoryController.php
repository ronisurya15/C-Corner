<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ListCategory()
    {
        return view('CategoryPostingan.tampil');
    }
    public function TambahCategory()
    {
        return view('CategoryPostingan.tambah');
    }
    public function EditCategory()
    {
        return view('CategoryPostingan.edit');
    }
}
