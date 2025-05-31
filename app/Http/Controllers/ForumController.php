<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function ListForum()
    {
        return view('ForumGroups.tampil');
    }
    public function TambahForum()
    {
        return view('ForumGroups.tambah');
    }
    public function EditForum()
    {
        return view('ForumGroups.edit');
    }
}
