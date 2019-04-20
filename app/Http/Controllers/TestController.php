<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class TestController extends Controller
{
    public function test()
    {
        $post = Post::findOrFail(1);
        $comment = $post->comments;

        dd($comment);
    }
}
