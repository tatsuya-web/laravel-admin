<?php

namespace App\Values;

class BreadCrumdValue {
    private array $bread_crumbs;

    public function __construct()
    {
        $this->bread_crumbs = [];
    }

    public function addCrumb(string $title, ?string $url = null): void
    {
        $this->bread_crumbs[] = new CrumdValue($title, $url);
    }

    public function getBreadCrumbs(): array
    {
        return $this->bread_crumbs;
    }
}