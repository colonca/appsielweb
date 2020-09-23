<?php

namespace App\Http\Livewire;

use App\Models\Customer as CustomerModel;
use Livewire\Component;

class Customer extends Component
{
    public $customers;

    public function mount(){
        $this->customers =  CustomerModel::where('show',true)->get();
    }

    public function render()
    {
        return view('livewire.customer');
    }
}
