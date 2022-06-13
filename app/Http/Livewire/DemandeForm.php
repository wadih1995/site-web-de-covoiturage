<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Demande;

class DemandeForm extends Component
{   
	public $depart;
    public $arrive;
    public $heure;
    public $marque;
    public $nombre;
    public $telephone;
    public $date;
  
    public function submit()
    {
        $data = $this->validate([
            'depart' => 'required',
            'arrive' => 'required',
            'heure' => 'required',
            'marque' => 'required',
            'nombre' => 'required',
            'telephone' => 'required|min:8|numeric',
            'date' => 'required|date',
            
        ]);
  
        Demande::create($data);
  
        return redirect()->route('user.home');
    }

    public function render()
    {
       
        return view('livewire.demande-form')->extends('dashboard.user.home');
    }
}