<?php

namespace App\Http\Controllers\Cockpit;

use App\Http\Controllers\Controller;
use App\Services\CockpitService\PostService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Cockpit\PostUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index(PostService $service): View
    {
        $posts = $service->lister();
        return view('cockpit.post.index', compact('posts'));
    }

    public function create(PostService $service): RedirectResponse
    {
        $post = $service->creator();
        return Redirect::route('cockpit.post.edit', ['post' => $post->id]);
    }

    public function edit(
        Request $request,
        PostService $service
    ): View
    {
        list($post, $categories, $statuses) = $service->reader($request->post);
        return view('cockpit.post.edit', compact('post', 'categories', 'statuses'));
    }

    public function update(
        PostUpdateRequest $request,
        PostService $service
    ): RedirectResponse
    {
        $post = $service->updater($request->post, $request->validPost());
        return Redirect::route('cockpit.post.edit', ['post' => $post->id]);
    }

    public function destroy(
        Request $request,
        PostService $service
    ): RedirectResponse
    {
        $service->destroyer($request->post);
        return Redirect::route('cockpit.post.index');
    }
}
