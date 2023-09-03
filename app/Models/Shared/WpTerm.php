<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;

class WpTerm extends Model
{
    protected $table = "wp_terms";
    protected $primaryKey = 'term_id';

    protected $casts = [
        'term_id' => 'integer',
    ];
}
