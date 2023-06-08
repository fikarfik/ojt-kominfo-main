<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.berita.index", [
            'showPostFromController' => Post::where('user_id', auth()->user()->id)->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $beritum)
    {

        $rules = [
            "titleFromTablePost" => "required",
            "category_id" => "required",
            "slugFromTablePost" => "required|unique:posts",
            'imageFromTablePost' => 'image|file|max:1024',
            "bodyFromTablePost" => "required"
        ];


        $validatedData = $request->validate($rules);

        if ($request->file('imageFromTablePost')) {
            $validatedData['imageFromTablePost'] = $request->file('imageFromTablePost')->store('post-images');
        }

        if ($request->slugFromTablePost != $beritum->slugFromTablePost) {
            $validatedData['slugFromTablePost'] = Str::slug($request->slugFromTablePost, '-');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerptFromTablePost'] = Str::limit(strip_tags($request->bodyFromTablePost), 100, '...');

        Post::create($validatedData);

        return redirect('/admin/berita')->with('success', 'berita berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $beritum)
    {
        return view('admin.berita.showDetail', [
            "showPostFromController" => $beritum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $beritum)
    {
        return view('admin.berita.edit', [
            'showPostFromController' => $beritum,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $beritum)
    {
        $rules = [
            "titleFromTablePost" => "required",
            "category_id" => "required",
            "slugFromTablePost" => "required",
            "imageFromTablePost" => "image|file|max:1024",
            "bodyFromTablePost" => "required"
        ];


        $validatedData = $request->validate($rules);

        $validatedData['slugFromTablePost'] = Str::slug($request->slugFromTablePost, '-');


        if ($request->file('imageFromTablePost')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['imageFromTablePost'] = $request->file('imageFromTablePost')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerptFromTablePost'] = Str::limit(strip_tags($request->bodyFromTablePost), 100, '...');
        $beritum = Post::find($beritum->id);

        if ($beritum) {
            $beritum->update($validatedData);
            return redirect('/admin/berita')->with('success', 'Berita berhasil diubah');
        } else {
            return redirect('/admin/berita')->with('error', 'Berita tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $beritum)
    {
        if($beritum->imageFromTablePost) {
            Storage::delete($beritum->imageFromTablePost);
        }

        Post::destroy($beritum->id);
        return redirect('/admin/berita')->with('success', 'Berhasil Di Hapus');
    }
}
