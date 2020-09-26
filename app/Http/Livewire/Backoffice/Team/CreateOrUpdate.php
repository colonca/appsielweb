<?php

namespace App\Http\Livewire\Backoffice\Team;

use App\Models\Team;
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
                //$team->image = $team->image;
                $hoy = getdate();
                $file = $this->image;
                if (unlink("../storage/app/docs/team/" . $team->image)) {
                    $name = "Team_" . $hoy["year"] . $hoy["mon"] . $hoy["mday"] . $hoy["hours"] . $hoy["minutes"] . $hoy["seconds"] . "_" . $file->getClientOriginalExtension();
                    $path = public_path() . "/docs/customer/";
                    $this->photo->storePubliclyAs('/docs/team/', $name);
                    // $file->move($path, $name);
                    $team->photo = $name;
                }
            }
        } else {
            $team = new Team();
            $this->validate([
                'photo' => 'required'
            ]);
            $hoy = getdate();
            $file = $this->photo;
            $name = "Team_" . $hoy["year"] . $hoy["mon"] . $hoy["mday"] . $hoy["hours"] . $hoy["minutes"] . $hoy["seconds"] . "_" . $file->getClientOriginalExtension();
            $path = public_path() . "/docs/team";
            $this->photo->storePubliclyAs('/docs/team/', $name);
            // $file->move($path, $name);
            $team->photo = $name;
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
