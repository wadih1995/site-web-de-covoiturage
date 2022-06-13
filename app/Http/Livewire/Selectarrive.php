<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PointDepart;
use App\Models\PointArrive;

class Selectarrive extends Component
{
    public $pointdepart;
    public $pointarrive;
    public $pointarrives;
    public function render()
    {
        $pointdeparts=PointDepart::all();
        return view('livewire.selectarrive',compact('pointdeparts'));
    }

    public function updatedPointDepart($pointdepartId){
        $this -> pointarrives=PointArrive::where('depart_id',$pointdepartId)->get();
    }
}
