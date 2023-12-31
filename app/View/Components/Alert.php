<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

    public $type;
    public $post_count;
    /**
     * Create a new component instance.
     */
    public function __construct($message = null, $count)
    {
        $this->type = $message;
        $this->post_count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
