<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class DetailPiutangPenjualan extends Component
{
    protected $listeners = [
        'detailPiutangModal',
        'closedPiutangModal'
    ];



    public function detailPiutangModal($customer_id)
    {
        //
    }

    public function closedPiutangModal()
    {
        //
    }

    public function render()
    {
        return view('livewire.modals.detail-piutang-penjualan');
    }
}
