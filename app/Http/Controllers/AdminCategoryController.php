<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;


class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kategori.index', [
            "showCategoryFromController" => Category::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create', [
            'showCategoryFromController' => Category::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            "nameFromTableCategory" => "required|unique:categories",
            "slugFromTableCategory" => "required|unique:categories",
        ];

        $validatedData = $request->validate($rules);

        $validatedData['slugFromTableCategory'] = Str::slug($request->slugFromTableCategory,'-');

        Category::create($validatedData);

        return redirect('/admin/kategori')->with('success', 'Kategori Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('admin.kategori.create', [
            'showCategoryFromController' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $kategori)
    {
        $rules = [
            "nameFromTableCategory" => "required|unique:categories",
            "slugFromTableCategory" => "required|unique:categories",
        ];

        $validatedData = $request->validate($rules);

        $validatedData['slugFromTableCategory'] = Str::slug($request->slugFromTableCategory,'-');

        if ($kategori) {
            $kategori->update($validatedData);
            return redirect('/admin/kategori')->with('success', 'Kategori berhasil diubah');
        } else {
            return redirect('/admin/kategori')->with('error', 'Kategori tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $kategori)
    {
        Category::destroy($kategori->id);

        return redirect('/admin/kategori')->with('success', 'Kategori berhasil Hapus');
    }
}
