<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;
use App\Models\Customer;
use App\Traits\WithSorting;
use Livewire\Attributes\On;
use Livewire\WithPagination;


class CustomerTable extends Component
{

    use WithPagination;
    use WithSorting; 

    public CustomerForm $form; 

    public
        $paginate = 10,
        $sortBy = 'customers.id',
        $sortDirection = 'desc';


    #[On('dispatch-customer-create-save')]
    #[On('dispatch-customer-create-edit')]
    #[On('dispatch-customer-delete')]
    public function render()
    {
        return view('livewire.customer-table', 
                    ['data' => Customer::where('id', 'like', '%'.$this->form->id.'%')
                        ->where('name', 'like', '%'.$this->form->name.'%')
                        ->where('email', 'like', '%'.$this->form->email.'%')
                        ->where('address', 'like', '%'.$this->form->address.'%')
                        ->orderBy($this->sortBy, $this->sortDirection)
                        ->paginate($this->paginate)
                    ]);
    }
}
