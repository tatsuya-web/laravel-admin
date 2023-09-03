<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shared\WpPost as SharedWpPost;

class WpPost extends SharedWpPost
{
    const POST_TYPE = 'wp-post';

    public function wpPostCategories()
    {
        return $this->belongsToMany(WpPostCategory::class, 'wp_term_relationships', 'object_id', 'term_taxonomy_id');
    }
}
