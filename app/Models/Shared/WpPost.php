<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\HasWpFindByName;
use App\Traits\HasWpFindBySlug;
use App\Traits\HasWpPrimaryKey;

abstract class WpPost extends Model
{
    use HasWpFindByName, HasWpFindBySlug, HasWpPrimaryKey;

    const POST_TYPE = null;
    const VISIBLE_STATUS = ['publish'];

    protected $table = "wp_posts";
    protected $primaryKey = 'ID';

    //中略

    protected $dates = [
        'post_date',
        'post_date_gmt',
        'post_modified',
        'post_modified_gmt',
    ];
    protected $casts = [
        'ID' => 'integer',
        'post_auther' => 'integer',
        'post_parent' => 'integer',
        'menu_order' => 'integer',
        'post_date'=> 'date:Y-m-d H:i:s',
        'post_date_gmt'=> 'date:Y-m-d H:i:s',
        'post_modified'=> 'date:Y-m-d H:i:s',
        'post_modified_gmt'=> 'date:Y-m-d H:i:s',
    ];

    public function metas()
    {
        return $this->hasMany(WpPostMeta::class, 'post_id');
    }

    public function getMetaAttribute()
    {
        if ($this->metadata === null) {
            $this->metadata = new WpMetaData($this->metas);
        }

        return $this->metadata;
    }

    public function getThumbnailAttribute()
    {
        if ($this->meta->_thumbnail_id) {
            return WpFile::find($this->meta->_thumbnail_id);
        }

        return null;
    }

    public function scopeInTerm(Builder $query, WpTermTaxonomy $term)
    {
        $post_ids = WpTermRelationship::where('term_taxonomy_id', $term->term_taxonomy_id)->get()->pluck('object_id');

        $query->whereIn('ID', $post_ids);

        return $query;
    }

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('post_type', function (Builder $builder) {
            if (static::POST_TYPE) {
                $builder->where('post_type', static::POST_TYPE);
            }
        });

        static::addGlobalScope('published', function (Builder $builder) {
            $builder->whereIn('post_status', static::VISIBLE_STATUS);
        });
    }
}
