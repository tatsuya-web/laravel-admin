<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dialog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private string $title,
        private string $message,
        private string $action = '削除する',
        private string $cancel = 'キャンセル'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dialog', [
            'title' => $this->title,
            'message' => $this->message,
            'action' => $this->action,
            'cancel' => $this->cancel,
        ]);
    }
}
