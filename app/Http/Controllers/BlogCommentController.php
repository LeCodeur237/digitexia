<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    public function store(Request $request, BlogPost $post)
    {
        abort_unless(auth()->check(), 403);

        $data = $request->validate([
            'body' => ['required', 'string', 'max:5000'],
            'parent_id' => ['nullable', 'integer', 'exists:blog_comments,id'],
        ]);

        $comment = BlogComment::create([
            'blog_post_id' => $post->id,
            'user_id' => auth()->id(),
            'parent_id' => $data['parent_id'] ?? null,
            'body' => $data['body'],
            'status' => 'pending',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return back()->with('status', 'Comment submitted for review.');
    }
}
