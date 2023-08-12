<?php

namespace App\View\Components;

use App\Models\Page;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBar extends Component
{
    public $pages;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->pages = Page::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-bar', [
            'pages' => $this->pages
        ]);
    }
}
