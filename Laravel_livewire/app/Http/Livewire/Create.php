<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
class Create extends Component
{
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public function resetInputFillds(){
        $this->firstname = '';
        $this->lastname = '';
        $this->phone = '';
        $this->email = '';
    }
    public function store(){
        $validateData = $this->validate = ([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email'
        ]);
        Student::create($validateData);
        session()->flash('message','Student Added Successfully');
        $this->resetInputFillds();
        // $this->emit('Addstudent');
        return redirect('/students');

    }
    public function render()
    {
        return view('livewire.create');
    }
}
