<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\HasWpFindByName;
use App\Traits\HasWpFindBySlug;

class WpTermTaxonomy extends Model
{
    use HasWpFindByName, HasWpFindBySlug;

    const TAXONOMY = null;

    protected $table = "wp_term_taxonomy";
    protected $primaryKey = 'term_taxonomy_id';

    //中略

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('post_type', function (Builder $builder) {
            if (static::TAXONOMY) {
                $builder->where('taxonomy', static::TAXONOMY);
            }
        });
    }

    // term へのリレーション
    public function wpTerm()
    {
        return $this->belongsTo(WpTerm::class, 'term_id');
    }

    // name : ターム名
    public function getNameAttribute()
    {
        return $this->wpTerm->name;
    }

    // slug : スラッグ
    public function getSlugAttribute()
    {
        return $this->wpTerm->slug;
    }
}
