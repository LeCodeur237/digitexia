<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    public function store(Request $request, BlogPost $post)
    {
        abort_unless($post->allow_comments, 403);

        $data = $request->validate([
            'guest_name' => [auth()->check() ? 'nullable' : 'required', 'string', 'max:120'],
            'guest_email' => [auth()->check() ? 'nullable' : 'required', 'email', 'max:160'],
            'body' => ['required', 'string', 'max:5000'],
            'parent_id' => ['nullable', 'integer', 'exists:blog_comments,id'],
        ]);

        BlogComment::create([
            'blog_post_id' => $post->id,
            'user_id' => auth()->id(),
            'guest_name' => auth()->check() ? null : $data['guest_name'],
            'guest_email' => auth()->check() ? null : $data['guest_email'],
            'parent_id' => $data['parent_id'] ?? null,
            'body' => $data['body'],
            'status' => 'pending',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return back()->with('status', __('Comment submitted for review.'));
    }
}
