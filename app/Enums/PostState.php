<?php

namespace App\Enums;

use Illuminate\Support\Collection;

enum PostState: string{
    case DRAFT = '下書き';
    case PUBLISHED = '公開';

    public static function toSelectCollection(): Collection
    {
        return collect([
            self::DRAFT->value,
            self::PUBLISHED->value,
        ]);
    }
}