<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentCreateRequest;

class CommentController extends Controller
{
    public function create(CommentCreateRequest $request)
    {
        Comment::create($request->commentFillData());

        return redirect()
            ->back()
            ->with('success', '评论成功');
    }
}
