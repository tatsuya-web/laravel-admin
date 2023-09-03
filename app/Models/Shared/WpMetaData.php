<?php
namespace App\Models\Shared;

use Illuminate\Support\Collection;

class WpMetaData
{
    private $properties = [];

    public function __construct(Collection $postmetas)
    {
        foreach ($postmetas as $postmeta) {
            $this->properties[$postmeta->meta_key] = $postmeta->meta_value;
        }
    }

    public function __get($key)
    {
        return $this->properties[$key] ?? null;
    }
}