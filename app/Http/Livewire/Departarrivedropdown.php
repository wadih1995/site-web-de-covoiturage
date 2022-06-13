<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Depart;
use App\Models\Arrive;

class Departarrivedropdown extends Component
{
    public $departs;
    public $arrives;

    public $selectedDepart = NULL;

    public function mount()
    {
        $this->departs = Depart::all();
        $this->arrives = collect();
    }

    public function render()
    {
        return view('livewire.departarrivedropdown')->extends('dashboard.user.home');
    }

    public function updatedSelectedDepart($depart)
    {
        if (!is_null($depart)) {
            $this->arrives = Arrive::where('depart_id', $depart)->get();
        }
    }
}
