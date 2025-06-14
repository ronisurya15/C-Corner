<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ListCategory()
    {
        $data = PostCategory::latest()->get();

        return view('CategoryPostingan.tampil', compact('data'));
    }

    public function TambahCategory()
    {
        return view('CategoryPostingan.tambah');
    }

    public function store(Request $request)
    {
        PostCategory::create($request->all());

        return redirect()->route('category.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function EditCategory($id)
    {
        $data = PostCategory::where('id', $id)->first();

        if (!$data) {
            return redirect()->route('category.index');
        }

        return view('CategoryPostingan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = PostCategory::where('id', $id)->first();

        if (!$data) {
            return redirect()->back();
        }

        $data->update([
            'title' => $request->title
        ]);

        return redirect()->route('category.index')->with('success', 'Data berhasil diedit.');
    }

    public function destroy(Request $request, $id)
    {
        $data = PostCategory::where('id', $id)->first();

        if (!$data) {
            return redirect()->back();
        }

        $data->delete();

        return redirect()->route('category.index')->with('success', 'Data berhasil dihapus.');
    }
}
