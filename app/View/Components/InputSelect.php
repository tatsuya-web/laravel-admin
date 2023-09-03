<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class InputSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private string $title,
        private string $name,
        private string $value = '',
        private Collection $options,
        private string $show = '',
        private string $key = '',
        private bool $required = false,
        private bool $readonly = false,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select', [
            'title' => $this->title,
            'name' => $this->name,
            'value' => $this->value,
            'options' => $this->options,
            'show' => $this->show,
            'key' => $this->key,
            'required' => $this->required,
            'readonly' => $this->readonly,
        ]);
    }
}
