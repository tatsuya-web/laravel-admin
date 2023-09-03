<?php

namespace App\Traits;

trait HasWpPrimaryKey
{
    public function getIdAttribute(): string
    {
        return property_exists($this, 'id') ? $this->id : $this->attributes[$this->primaryKey];
    }
}