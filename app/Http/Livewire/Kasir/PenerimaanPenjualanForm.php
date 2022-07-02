<?php

namespace App\Http\Livewire\Kasir;

use App\Models\Bisnis\Penjualan;
use App\Models\Bisnis\PenjualanRetur;
use App\Models\Master\Customer;
use Livewire\Component;

class PenerimaanPenjualanForm extends Component
{
    protected $listeners = [
        'setCustomer'
    ];

    public $tanggal;
    public $customer_id, $customer_nama;
    public $akun_kas_id, $akun_piutang_id;
    public $nominal_kas, $nominal_piutang;

    public $detail = [];

    public $pnejualan_id, $penjualan_retur_id;

    public function setCustomer(Customer $customer)
    {
        $customer = (object)$customer;
        $this->customer_id = $customer->id;
        $this->customer_nama = $customer->nama;
    }

    public function setPenjualan(Penjualan $penjualan)
    {
        //
    }

    public function setPenjualanRetur(PenjualanRetur $penjualanRetur)
    {
        //
    }

    public function addLine()
    {
        //
    }

    public function editLine($index)
    {
        //
    }

    public function updateLine()
    {
        //
    }

    public function removeLine()
    {
        //
    }

    public function render()
    {
        return view('livewire.kasir.penerimaan-penjualan-form');
    }
}
