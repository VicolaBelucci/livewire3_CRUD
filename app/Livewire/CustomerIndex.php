<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class CustomerIndex extends Component
{

    
    #[Title('Customer')]
    public function render() : View
    {
        return view('livewire.customer-index');
    }
}
