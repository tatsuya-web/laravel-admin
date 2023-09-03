<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;

class WpTermRelationShip extends Model
{
    protected $table = "wp_term_relationships";
    protected $primaryKey = 'term_taxonomy_id';

    protected $casts = [
        'term_taxonomy_id' => 'integer',
    ];
}
