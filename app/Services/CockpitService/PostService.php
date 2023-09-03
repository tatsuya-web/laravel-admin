<?php

namespace App\Services\CockpitService;

use App\Models\Post;
use App\Repositories\PostRepository;
use App\Repositories\CategoryRepository;
use App\Enums\PostState;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
    public function lister(): Collection
    {
        return (new PostRepository())->all();
    }

    public function creator(): Post
    {
        return (new PostRepository())->create();
    }

    public function reader($id): array
    {
        $post = (new PostRepository())->find($id);
        $categories = (new CategoryRepository())->all();
        $statuses = PostState::toSelectCollection();
        return [$post, $categories, $statuses];
    }

    public function updater($id, $data): Post
    {
        return (new PostRepository())->update($id, $data);
    }

    public function destroyer($id): void
    {
        (new PostRepository())->delete($id);
    }
}