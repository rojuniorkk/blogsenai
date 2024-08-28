<?php

namespace App\Http\Controllers;

use App\Models\Post;

class WebsiteController extends Controller
{
    public function index()
    {

        try {
            $posts = Post::orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            $posts = null;
        }

        return view('website.home', [
            'posts' => $posts
        ]);
    }
}
