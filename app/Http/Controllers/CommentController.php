<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{

    public function create(CommentRequest $request)
    {
        $blog = Comment::create($request->validated());
        return redirect()->route('Comment.index');
    }

    public function update(CommentRequest $request)
    {
        Comment::whereId($request->id)->update(
            [
                'text' => $request->text
            ]
            );
        
        return redirect()->route('comment.index');
        
    }

    public function delete($id)
    {
        Comment::whereId($id)->delete();
        return redirect()->route('Comment.index');
    }

   

}
