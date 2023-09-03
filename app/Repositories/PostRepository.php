<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostRepository
{
    public function all(): Collection
    {
        return Post::all();
    }

    public function create(): Post
    {
        return Post::create([
            'title' => '下書きの新しい投稿',
            'contents' => '',
            'slug' => Str::random(12),
            'category_id' => 1,
            'user_id' => Auth::id(),
        ]);
    }

    public function find(int $id): Post
    {
        return Post::findOrFail($id);
    }

    public function update(int $id, array $data): Post
    {
        $post = $this->find($id);
        $post->update($data);
        return $post;
    }

    public function delete(int $id): void
    {
        $post = $this->find($id);
        $post->delete();
    }
}