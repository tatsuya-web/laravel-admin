<?php

namespace App\Traits;

use App\Models\Shared\WpTerm;

trait HasWpFindBySlug
{
    public static function findBySlugOrFail(string $slug)
    {
        $term_ids = WpTerm::where('slug', urlencode($slug))->get()->pluck('term_id');
        if ($term_ids->count() === 0) {
            abort(404);
        }

        $term_taxonomy = static::whereIn('term_id', $term_ids)->first();
        if ($term_taxonomy === null) {
            abort(404);
        }

        return $term_taxonomy;
    }
}