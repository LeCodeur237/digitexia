<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'author_id',
        'editor_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'seo_title',
        'seo_description',
        'cover_image',
        'cover_image_alt',
        'tags',
        'status',
        'visibility',
        'is_featured',
        'is_pinned',
        'allow_comments',
        'reading_time_minutes',
        'views_count',
        'published_at',
        'scheduled_for',
    ];

    protected function casts(): array
    {
        return [
            'tags' => 'array',
            'is_featured' => 'boolean',
            'is_pinned' => 'boolean',
            'allow_comments' => 'boolean',
            'views_count' => 'integer',
            'reading_time_minutes' => 'integer',
            'published_at' => 'datetime',
            'scheduled_for' => 'datetime',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'editor_id');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class, 'blog_post_id');
    }

    public function scopePublished($query)
    {
        return $query
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function isPublished(): bool
    {
        return $this->status === 'published'
            && ! is_null($this->published_at)
            && $this->published_at->isPast();
    }
}
