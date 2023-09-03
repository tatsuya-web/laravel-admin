<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextArea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private string $title,
        private string $name,
        private string $value = '',
        private string $placeholder = '',
        private bool $required = false,
        private bool $readonly = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-area', [
            'title' => $this->title,
            'name' => $this->name,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
            'required' => $this->required,
            'readonly' => $this->readonly,
        ]);
    }
}
