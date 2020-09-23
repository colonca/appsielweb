<?php

namespace App\Http\Livewire\About;

use App\Models\Team as TeamModel;
use Livewire\Component;

class Team extends Component
{
    public $team;
    public $current;

    public function mount(){
        $this->team  = TeamModel::all();
        $this->current = $this->team->first();
    }

    public function render()
    {
        return view('livewire.about.team');
    }

}
