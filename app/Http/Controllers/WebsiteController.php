<?php

namespace App\Http\Controllers;

use App\Models\Post;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home', [
            'posts' => Post::orderBy('created_at', 'desc')->get()
        ]);
    }
}
