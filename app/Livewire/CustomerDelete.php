<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\Attributes\On;

class CustomerDelete extends Component
{

    public $id;
    public $name; 

    public $modalCustomerDelete = false; 

    #[On('dispatch-customer-table-delete')]
    public function set_customer($id, $name)
    {
        $this->id = $id;
        $this->name = $name;

        $this->modalCustomerDelete = true; 
    }

    public function delete()
    {
        $del = Customer::destroy($this->id);

        is_null($del) 
        ? $this->dispatch('notify', title: 'success', message: 'Editado!') 
        : $this->dispatch('notify', title: 'failed', message: 'Falhou!'); 

        $this->modalCustomerDelete = false; 

        $this->dispatch('dispatch-customer-delete')->to(CustomerTable::class);

    }
    public function render()
    {
        return view('livewire.customer-delete');
    }
}
