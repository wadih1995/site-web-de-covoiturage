<?php
   
namespace App\Http\Livewire;
   
use Livewire\Component;
use App\Models\City;
use App\Models\State;
use App\Models\Info;
   
class Statecitydropdown extends Component
{
    public $states;
    public $cities;
    public $infos;
   
    public $selectedState = NULL;
    public $selectedCity = NULL;


   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        $this->states = State::all();
        $this->cities = City::all();
        $this->infos = Info::all();
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.statecitydropdown')->extends('dashboard.user.home');
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }

    public function updatedSelectedCity($city)
    {
        if (!is_null($city)) {
            $this->infos = Info::where('city_id', $city)->get();
        }
    }
     
 
}