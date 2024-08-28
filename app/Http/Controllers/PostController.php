<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index(){
        return view('website.post-create');
    }

    public function show($id){
        return view('website.post-details', [
            'post' => Post::find($id)
        ]);
    }

    public function create(Request $request){
        $POST = Post::create([
            'title' => $request['title'],
            'user_id' => Auth::user()->id
        ]);

        foreach($request['post-line'] as $value){
            DB::table('posts_elements')->insert([
                'post_id' => $POST->id,
                'subtitle' => $value['subtitle'],
                'text' => $value['text'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return redirect()->route('post.view', ['id' => $POST->id]);
    }
}
