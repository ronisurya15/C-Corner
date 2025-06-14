<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class PostsController extends Controller
{
    public function ListPosts()
    {
        // Initialize
        $data = Post::with('postCategory', 'forum')->where('user_id', auth()->user()->id)->latest()->get();

        return view('posts.tampil', compact('data'));
    }

    public function TambahPosts()
    {
        // Initialize
        $category = PostCategory::get();
        $forum = Forum::get();

        return view('posts.tambah', compact('category', 'forum'));
    }

    public function store(Request $request)
    {
        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        // Simpan data ke database
        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . date('Ymdhis'),
            'description' => $request->description,
            'posts_category_id' => $request->category_id,
            'forum_id' => $request->forum_id,
            'thumbnail' => $thumbnailPath,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('posts.index')->with('success', 'Postingan berhasil disimpan!');
    }

    public function EditPosts($id)
    {
        // Initialize
        $category = PostCategory::get();
        $forum = Forum::get();
        $data = Post::with('postCategory', 'forum')->where('user_id', auth()->user()->id)->where('id', $id)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        return view('posts.edit', compact('data', 'category', 'forum'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $thumbnailPath = $post->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $newPath = $request->file('thumbnail')->store('thumbnails', 'public');

            if ($post->thumbnail && Storage::disk('public')->exists($post->thumbnail)) {
                Storage::disk('public')->delete($post->thumbnail);
            }

            $thumbnailPath = $newPath;
        }

        // Update data
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'posts_category_id' => $request->category_id,
            'forum_id' => $request->forum_id,
            'thumbnail' => $thumbnailPath,
        ]);

        return redirect()->route('posts.index')->with('success', 'Postingan berhasil diedit!');
    }

    public function destroy(Request $request, $id)
    {
        $data = Post::where('id', $id)->where('user_id', auth()->user()->id)->first();

        if (!$data) {
            return redirect()->back();
        }

        Storage::disk('public')->delete($data->thumbnail);
        $data->delete();

        return redirect()->route('forum.index')->with('success', 'Data berhasil dihapus.');
    }
}
