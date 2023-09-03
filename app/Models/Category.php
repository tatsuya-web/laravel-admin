<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
    ];

    public function posts()
    {
        // このカテゴリーに属する投稿を取得
        return $this->hasMany(Post::class);
    }

    public function user()
    {
        // このカテゴリーを作成したユーザーを取得
        return $this->belongsTo(User::class);
    }
}
