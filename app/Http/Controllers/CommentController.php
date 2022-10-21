<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Request $request, $id)
    {
        $comments = new comment();
        $comments->name = $request->name;
        $comments->message = $request->message;
        $comments->blog_id = $id;

        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $filename = ($request->name).time().'.'.$ext;
            $request->file('image')->storePubliclyAs('public/image', $filename);
            $comments->image = $filename;
        }
        $comments->save();
        return back()->with(['success' => 'Your comment has been uploaded ']);

    }
}
