<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Voiture;
use App\Models\Heure;
use App\Models\InfoVoiture;

class Voitureheure extends Component
{
    public $voitures;
    public $heures;
    public $infos;

    public $selectedVoiture = NULL;
    public $selectedHeure = NULL;

    public function mount()
    {
        $this->voitures = Voiture::all();
        $this->heures = Heure::all();
        $this->infos = InfoVoiture::all();
    }
    public function render()
    {
        return view('livewire.voitureheure')->extends('dashboard.user.home');;
    }

    public function updatedSelectedVoiture($voiture)
    {
        if (!is_null($voiture)) {
            $this->heures = Heure::where('voiture_id', $voiture)->get();
        }
    }

    public function updatedSelectedHeure($heure)
    {
        if (!is_null($heure)) {
            $this->infos = InfoVoiture::where('heure_id', $heure)->get();
        }
    }
}
