<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Livewire\Component;

class CustomerCreate extends Component
{
    public CustomerForm $form; 

    public $modalCustomerCreate = false; 

    public function save()
    { 
        $this->validate();

        $save = $this->form->store();

        is_null($save) 
        ? $this->dispatch('notify', title: 'success', message: 'Salvo!') 
        : $this->dispatch('notify', title: 'failed', message: 'Falhou!'); 

        $this->modalCustomerCreate = false; 

        $this->dispatch('dispatch-customer-create-save')->to(CustomerTable::class);

    }

    public function render()
    {
        return view('livewire.customer-create');
    }
}
