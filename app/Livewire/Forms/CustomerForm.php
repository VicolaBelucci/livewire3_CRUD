<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CustomerForm extends Form
{
    public ?Customer $customer;

    public $id;

    #[Rule('required|min:3')]
    public $name;
    
    #[Rule('required|email')]
    public $email;
    
    #[Rule('required|min:3')]
    public $address; 

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer; 

        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->address = $customer->address;
    }

    public function store()
    {
        Customer::create($this->except(['customer']));

        $this->reset();
    }

    public function update()
    {
        $this->customer->update($this->except(['customer']));
    }


    
    
}
