<?php

namespace App\Http\Livewire\Modals;

use App\Models\Master\Customer;
use Livewire\Component;

class SetCustomerModal extends Component
{
    protected $listeners = [
        'setCustomer'
    ];
    public function setCustomer(Customer $customer)
    {
        $this->emit('sendCustomer',(object) $customer);
    }

    public function render()
    {
        return view('livewire.modals.set-customer-modal');
    }
}
