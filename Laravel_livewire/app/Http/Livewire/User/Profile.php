<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Be like water. --}}
                <h1>Inline component create with a folder</h1>
            </div>
        blade;
    }
}
