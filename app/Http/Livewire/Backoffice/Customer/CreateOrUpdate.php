<?php

namespace App\Http\Livewire\Backoffice\Customer;

use App\Models\Customer;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateOrUpdate extends Component
{
    use WithFileUploads;

    public $description;
    public $image;
    public $url;
    public $show;
    public $customer_id;
    public $edit = false;

    protected $listeners = ['customerEdit'];

    public function render() {
        return view('livewire.backoffice.customer.create-or-update');
    }

    public function save() {
        $this->validate([
            'url' => 'required',
            'description' => 'required',
        ]);
        $result = $this->newOrEditCustomer();
        if ($result) {
            $this->emitUp('customersUpdated');
            $this->emit('message', [
                'body' => 'El Cliente <strong>' . $this->description . '</strong> fue almacenado correctamente.',
                'type' => 'success'
            ]);
        } else {
            $this->emit('message', [
                'body' => 'El Cliente <strong>' . $this->name . '</strong> no fue almacenado. Error: ' . $result,
                'type' => 'danger'
            ]);
        }
        $this->url = '';
        $this->image = '';
        $this->show = '';
        $this->description = '';
        $this->customer_id = '';
        $this->edit = false;
    }

    private function newOrEditCustomer() {
        if ($this->edit) {
            $customer = Customer::findOrFail($this->customer_id);
            if ($this->image != '') {
                //$customer->image = $customer->image;
                $hoy = getdate();
                $file = $this->image;
                if(unlink("../storage/app/docs/customer/".$customer->image)) {
                    $name = "Customer_" . $hoy["year"] . $hoy["mon"] . $hoy["mday"] . $hoy["hours"] . $hoy["minutes"] . $hoy["seconds"] . "_" . $file->getClientOriginalExtension();
                    $path = public_path() . "/docs/customer/";
                    $this->image->storePubliclyAs('/docs/customer/', $name);
                    // $file->move($path, $name);
                    $customer->image = $name;
                }
            }
        } else {
            $customer = new Customer();
            $this->validate([
                'image' => 'required'
            ]);
            $hoy = getdate();
            $file = $this->image;
            $name = "Customer_" . $hoy["year"] . $hoy["mon"] . $hoy["mday"] . $hoy["hours"] . $hoy["minutes"] . $hoy["seconds"] . "_" . $file->getClientOriginalExtension();
            $path = public_path() . "/docs/customer";
            $this->image->storePubliclyAs('/docs/customer/', $name);
            // $file->move($path, $name);
            $customer->image = $name;
        }
        //$customer = $this->edit ? Customer::findOrFail($this->customer_id) : new Customer();
        $customer->description = strtoupper($this->description);
        $customer->show = $this->show == null ? false : true;
        $customer->url = $this->url;
        $result = $customer->save();
        return $result;
    }

    public function customerEdit($customer) {
        $this->description = $customer['description'];
        $this->url = $customer['url'];
       $this->image = '';
        $this->customer_id = $customer['id'];
        $this->show = $customer['show'];
        $this->edit = true;
    }

    public function limpiar() {
        $this->url = '';
        $this->show = '';
        $this->image = '';
        $this->description = '';
        $this->category_id = '';
        $this->edit = false;
    }
}
