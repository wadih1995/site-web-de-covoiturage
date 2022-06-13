<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{   
	public $name;
    public $email;
    public $body;
    public $contact;
  
    public function submit()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);
  
        Contact::create($data);
  
        return redirect()->route('user.home');
    }

    public function render()
    {
       
        return view('livewire.contact-form')->extends('dashboard.user.home');
    }
}

