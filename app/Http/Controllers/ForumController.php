<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function ListForum()
    {
        $data = Forum::latest()->get();

        return view('ForumGroups.tampil', compact('data'));
    }

    public function TambahForum()
    {
        return view('ForumGroups.tambah');
    }

    public function store(Request $request)
    {
        Forum::create($request->all());

        return redirect()->route('forum.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function EditForum($id)
    {
        $data = Forum::where('id', $id)->first();

        if (!$data) {
            return redirect()->route('forum.index');
        }

        return view('ForumGroups.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Forum::where('id', $id)->first();

        if (!$data) {
            return redirect()->back();
        }

        $data->update([
            'title' => $request->title
        ]);

        return redirect()->route('forum.index')->with('success', 'Data berhasil diedit.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Forum::where('id', $id)->first();

        if (!$data) {
            return redirect()->back();
        }

        $data->delete();

        return redirect()->route('forum.index')->with('success', 'Data berhasil dihapus.');
    }
}
