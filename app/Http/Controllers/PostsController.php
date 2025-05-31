<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function ListPosts()
    {
        return view('posts.tampil');
    }
    public function TambahPosts()
    {
        return view('posts.tambah');
    }
    public function EditPosts()
    {
        return view('posts.edit');
    }
}
