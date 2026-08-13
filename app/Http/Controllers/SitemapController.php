<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $now = now();

        $urls = collect([
            ['loc' => url('/'), 'lastmod' => $now, 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => url('/the-problem'), 'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => url('/solutions'), 'lastmod' => $now, 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/projects'), 'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('/why-us'), 'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('/team'), 'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('/our-partners'), 'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('/life-at-digi'), 'lastmod' => $now, 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['loc' => url('/contact-us'), 'lastmod' => $now, 'changefreq' => 'monthly', 'priority' => '0.6'],
        ]);

        $solutionSlugs = [
            'medtrace',
            'aquawatch-ai',
            'wastepay',
            'flexicare',
            'performia',
        ];

        foreach ($solutionSlugs as $slug) {
            $urls->push([
                'loc' => url("/solutions/{$slug}"),
                'lastmod' => $now,
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ]);
        }

        BlogPost::query()
            ->published()
            ->where('visibility', 'public')
            ->latest('published_at')
            ->get(['slug', 'updated_at', 'published_at'])
            ->each(function (BlogPost $post) use ($urls) {
                $urls->push([
                    'loc' => route('blog.show', $post),
                    'lastmod' => $post->updated_at ?: $post->published_at,
                    'changefreq' => 'monthly',
                    'priority' => '0.7',
                ]);
            });

        return response()
            ->view('sitemap', ['urls' => $urls], 200)
            ->header('Content-Type', 'application/xml');
    }
}
