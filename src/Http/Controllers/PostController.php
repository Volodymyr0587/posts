<?php

namespace Volodymyr0587\Posts\Http\Controllers;

use Volodymyr0587\Posts\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts =  Post::orderBy("id", "desc")->get();
        return view("posts::index", [
            'posts' => $posts,
        ]);
    }


}
