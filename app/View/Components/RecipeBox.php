<?php

namespace App\View\Components;

use App\Models\Recipe;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecipeBox extends Component
{
    public $recipes;
    public $showtype;
    public $posts_per_page;
    public $limit = 1;
    /**
     * Create a new component instance.
     */
    public function __construct($showtype, $showpost)
    {

        $cat_term = 'Lunch';
        $this->showtype = $showtype;
        $this->posts_per_page = $showpost;
        $this->recipes = ($this->showtype == 'featured') ? 
        $recipes = Recipe::with('categories')->whereHas('categories', function ($query) use ($cat_term) {
        $query->where('cat_term', $cat_term);})->limit($this->posts_per_page)->get()
        : 
        Recipe::with('categories')->orderBy('created_at', 'desc')->paginate($this->posts_per_page);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recipe-box', [
            'recipes' => $this->recipes
        ]);
    }
}
