<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $name;
    public $message;
    public $gender;
    public $skills=[];
    public $department;
    public function render()
    {
        return view('livewire.form');
    }
}
