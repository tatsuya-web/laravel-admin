<?php

namespace App\Traits;

trait HasWpFindByName
{    public static function findByPostNameOrFail(string $post_name)
    {
        $post = static::where('post_name', urlencode($post_name))->first();

        if ($post === null) {
            abort(404);
        }

        return $post;
    }
}