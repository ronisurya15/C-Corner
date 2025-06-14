<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = Post::with('postCategory', 'forum')->latest()->get();

        return view('welcome', compact('data'));
    }
}
