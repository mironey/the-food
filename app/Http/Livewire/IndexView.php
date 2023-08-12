<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class IndexView extends Component
{

    public function mount() {

    }

    public function render() {
        return view('livewire.index-view');
    }
}
