<?php

namespace App\Models;

use App\Models\Shared\WpPostMeta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'contents',
        'category_id',
        'user_id',
    ];

    protected $relation_wp_posts_meta_key = 'post_title';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        // この投稿を書いたユーザーを取得
        return $this->belongsTo(User::class);
    }

    public function media()
    {
        // この投稿に紐づくメディアを交差テーブル経由で取得
        return $this->belongsToMany(Media::class);
    }

    public function getRelationWpPostsAttribute(): Collection
    {
        $relation_wp_posts_ids = WpPostMeta::where('meta_key', $this->relation_wp_posts_meta_key)->where('meta_value', $this->title)->get('post_id');
        if ($relation_wp_posts_ids->count() > 0) {
            $relation_wp_posts_ids = $relation_wp_posts_ids->pluck('post_id');
            return WpPost::whereIn('ID', $relation_wp_posts_ids)->get();
        }
        return collect([]);
    }
}
