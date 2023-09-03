<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;

class WpPostMeta extends Model
{
    protected $table = "wp_postmeta";
    protected $primaryKey = 'meta_id';

    protected $hidden = [];
    protected $appends = [];

    protected $casts = [
        'meta_id' => 'integer',
        'post_id' => 'integer',
    ];
}
