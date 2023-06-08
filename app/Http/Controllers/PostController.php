<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $titlePage = '';

        return view ('index', [
            "titlePage" => "All Post". $titlePage,
            "active" => "posts",
            "showPostFromController" => Post::latest()->filter(request(['search', 'category' , 'user']))->Paginate(7)->withQueryString()]);
    }

    public function show(Post $modelPost)
    {
        return view('frontend.singlePost.index', [
            'titlePage' => "Single Post",
            "active" => "posts",
            "showPostFromController" => $modelPost
        ]);
    }
}
