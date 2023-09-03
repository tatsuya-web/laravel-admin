<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{

    public function all(): Collection
    {
        return Category::all();
    }

    public function create(): Category
    {
        return Category::create([
            'name' => 'New Category',
            'slug' => 'new-category',
        ]);
    }

    public function find(int $id): Category
    {
        return Category::find($id);
    }

    public function update(int $id, array $data): Category
    {
        $category = Category::find($id);
        $category->update($data);
        return $category;
    }

    public function delete(int $id): void
    {
        Category::destroy($id);
    }
}