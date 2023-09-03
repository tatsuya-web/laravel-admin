<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use App\Repositories\PostRepository;
use App\Models\Post;

class PostService
{
    public function __construct(
        private PostRepository $repo
    ) {}

    public function lister(): Collection
    {
        return $this->repo->all();
    }

    public function reader(int $id): Post
    {
        return $this->repo->find($id);
    }
}