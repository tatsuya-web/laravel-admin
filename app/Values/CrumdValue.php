<?php

namespace App\Values;

class CrumdValue
{
    public function __construct(private string $title, private ?string $url = null)
    {
        //
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string|null
    {
        return $this->url ?? null;
    }
}