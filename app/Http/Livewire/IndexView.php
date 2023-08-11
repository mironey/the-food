<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class IndexView extends Component
{
    protected $recipes;

    public function mount() {
        $this->recipes = Recipe::paginate(6);
    }

    public function render() {
        return view('livewire.index-view', [
            'recipes' => $this->recipes
        ]);
    }
}
