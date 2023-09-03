<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class PostController extends Controller
{
    public function index(
        PostService $post_service,
    )
    {
        $posts = $post_service->lister();
        return view('web.post.index', compact('posts'));
    }

    public function detail(
        PostService $post_service,
        int $post
    )
    {
        $post = $post_service->reader($post);
        return view('web.post.detail', compact('post'));
    }
}
