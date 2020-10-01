<?php

namespace App\Http\Livewire\Backoffice\Team;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateOrUpdate extends Component
{
    use WithFileUploads;

    public $name;
    public $photo;
    public $phrase;
    public $profession;
    public $team_id;
    public $edit = false;

    public $listeners = ['teamEdit'];

    public function render() {
        return view('livewire.backoffice.team.create-or-update');
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'phrase' => 'required',
            'profession' => 'required',
        ]);
        $result = $this->newOrEditTeam();
        if ($result) {
            $this->emitUp('teamsUpdated');
            $this->emit('message', [
                'body' => 'El Miembro <strong>' . $this->name . '</strong> fue almacenado correctamente.',
                'type' => 'success'
            ]);
        } else {
            $this->emit('message', [
                'body' => 'El Miembro <strong>' . $this->name . '</strong> no fue almacenado. Error: ' . $result,
                'type' => 'danger'
            ]);
        }
        $this->name = '';
        $this->photo = '';
        $this->phrase = '';
        $this->profession = '';
        $this->team_id = '';
        $this->edit = false;
    }

    private function newOrEditTeam() {
        if ($this->edit) {
            $team = Team::findOrFail($this->team_id);
            if ($this->photo != '') {
                if (Storage::delete( $team->photo)) {
                    $path = $this->photo->store('team');
                    $team->photo = $path;
                }
            }
        } else {
            $team = new Team();
            $this->validate([
                'photo' => 'required'
            ]);
            $path = $this->photo->store('team');
            // $file->move($path, $name);
            $team->photo = $path;
        }
        //$team = $this->edit ? Customer::findOrFail($this->customer_id) : new Customer();
        $team->name = strtoupper($this->name);
        $team->profession = strtoupper($this->profession);
        $team->phrase = $this->phrase;
        $result = $team->save();
        return $result;
    }

    public function teamEdit($team) {
        $this->name = $team['name'];
        $this->profession = $team['profession'];
        $this->photo = '';
        $this->team_id = $team['id'];
        $this->phrase = $team['phrase'];
        $this->edit = true;
    }

    public function limpiar() {
        $this->phrase = '';
        $this->profession = '';
        $this->photo = '';
        $this->name = '';
        $this->team_id = '';
        $this->edit = false;
    }
}
