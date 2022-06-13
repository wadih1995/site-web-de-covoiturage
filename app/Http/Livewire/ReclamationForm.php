<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reclamation;

class ReclamationForm extends Component
{   
	public $name; 
    public $body;
  
    public function submit()
    {
        $data = $this->validate([
            'name' => 'required',
            'body' => 'required',
        ]);
  
        Reclamation::create($data);
  
        return redirect()->route('user.home');
    }

    public function render()
    {
        return view('livewire.reclamation-form')->extends('dashboard.user.home');
    }
}

