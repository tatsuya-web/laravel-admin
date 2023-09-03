<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Values\BreadCrumdValue;

class CockpitLayout extends Component
{
    private BreadCrumdValue $bread_crumd;
    /**
     * Create a new component instance.
     */
    public function __construct(private string $title, private array $crumd)
    {
        $this->bread_crumd = new BreadCrumdValue();

        foreach($crumd as $crum) {
            $this->bread_crumd->addCrumb($crum['title'], $crum['url'] ?? null);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.cockpit', [
            'title' => $this->title,
            'bread_crumd' => $this->bread_crumd,
        ]);
    }
}
