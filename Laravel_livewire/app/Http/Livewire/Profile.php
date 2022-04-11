<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
                <h2>This is my Profile.</h2>
            </div>
        blade;
    }
}
