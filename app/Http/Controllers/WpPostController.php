<?php

namespace App\Http\Controllers;

use App\Services\WpPostService;

class WpPostController extends Controller
{
    public function index(
        WpPostService $wp_post_service,
    )
    {
        $wp_posts = $wp_post_service->lister();
        return view('web.wp-post.index', compact('wp_posts'));
    }

    public function detail(
        WpPostService $wp_post_service,
        int $wp_post
    )
    {
        $wp_post = $wp_post_service->reader($wp_post);
        return view('web.wp-post.detail', compact('wp_post'));
    }
}
