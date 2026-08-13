<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogComment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'blog_post_id',
        'user_id',
        'guest_name',
        'guest_email',
        'parent_id',
        'body',
        'status',
        'is_flagged',
        'likes_count',
        'ip_address',
        'user_agent',
        'approved_by',
        'approved_at',
    ];

    protected function casts(): array
    {
        return [
            'is_flagged' => 'boolean',
            'likes_count' => 'integer',
            'approved_at' => 'datetime',
        ];
    }

    public function post()
    {
        return $this->belongsTo(BlogPost::class, 'blog_post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAuthorNameAttribute(): string
    {
        return $this->user?->name ?: ($this->guest_name ?: 'Guest');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
