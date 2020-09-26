<?php

namespace App\Http\Livewire\Backoffice\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $listeners = ['customersUpdated'];

    public function render() {
        return view('livewire.backoffice.customer.index', [
            'customers' => Customer::paginate(10)
        ]);
    }

    public function customersUpdated(){
        // Self::render(); NO ELIMINAR
    }

    public function edit($id) {
        $customer = Customer::find($id);
        $this->emit('customerEdit',$customer);
    }

    public function delete($id){
        $customer = Customer::find($id);
        $result = $customer->delete();
        if($result){
            $this->emit('message', [
                'body' => 'El Cliente <strong>' . $customer->name . '</strong> fue eliminado correctamente.',
                'type' => 'success'
            ]);
        }else{
            $this->emit('message', [
                'body' => 'El Cliente <strong>' . $customer->name . '</strong> no fue eliminad0 correctamente.',
                'type' => 'danger'
            ]);
        }
    }

}
