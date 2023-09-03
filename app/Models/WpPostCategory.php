<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Shared\WpTermTaxonomy as SharedWpTermTaxonomy;

class WpPostCategory extends SharedWpTermTaxonomy
{
    const TAXONOMY = 'cat_wp-post';

    public function wpPosts()
    {
        return $this->belongsToMany(WpPost::class, 'wp_term_relationships', 'term_taxonomy_id', 'object_id');
    }
}
