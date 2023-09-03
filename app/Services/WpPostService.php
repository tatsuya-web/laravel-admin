<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use App\Repositories\WpPostRepository;
use App\Models\WpPost;

class WpPostService
{
    public function __construct(
        private WpPostRepository $repo
    ) {}

    public function lister(): Collection
    {
        return $this->repo->all();
    }

    public function reader(int $id): WpPost
    {
        return $this->repo->find($id);
    }
}