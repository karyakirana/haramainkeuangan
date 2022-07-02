<?php

namespace App\Http\Livewire\Kasir;

use Livewire\Component;

class PenerimaanPenjualanForm extends Component
{
    protected $listeners = [
        'sendCustomer'=>'setCustomer'
    ];

    public $tanggal;
    public $customer_id, $customer_nama;
    public $akun_kas_id, $akun_piutang_id;
    public $nominal_kas, $nominal_piutang;

    public function setCustomer($customer)
    {
        dd($customer);
        $this->customer_id = $customer->id;
        $this->customer_nama = $customer->nama;
    }

    public function render()
    {
        return view('livewire.kasir.penerimaan-penjualan-form');
    }
}
