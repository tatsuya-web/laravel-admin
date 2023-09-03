<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Models\WpPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class WpPostRepository
{
    public function __construct(
        private WpPost $model
    ) {}

    public function all(): Collection
    {
        return $this->model::all();
    }

    public function find(int $id): WpPost
    {
        return $this->model::findOrFail($id);
    }
}