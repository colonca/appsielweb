<?php

namespace App\Http\Livewire\Backoffice\Team;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Self_;

class Index extends Component
{
    use WithPagination;

    public $listeners = ['teamsUpdated'];

    public function render() {
        return view('livewire.backoffice.team.index', [
            'teams' => Team::paginate(10)
        ]);
    }

    public function teamsUpdated() {
        // Self::render(); NO ELIMINAR
    }

    public function edit($id) {
        $team = Team::find($id);
        $this->emit('teamEdit', $team);
    }

    public function delete($id){
        $team = Team::find($id);
        $result = $team->delete();
        if($result){
            $this->emit('message', [
                'body' => 'El Miembro <strong>' . $team->name . '</strong> fue eliminado correctamente.',
                'type' => 'success'
            ]);
        }else{
            $this->emit('message', [
                'body' => 'El Miembro <strong>' . $team->name . '</strong> no fue eliminado correctamente.',
                'type' => 'danger'
            ]);
        }
    }
}
