<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Studentprofile extends Component
{
    public function render()
    {
        $data = ['name'=>'Sofik','Email'=>'Sofik@gmail.com'];
        return view('livewire.studentprofile',['data'=>$data]);
    }
}
