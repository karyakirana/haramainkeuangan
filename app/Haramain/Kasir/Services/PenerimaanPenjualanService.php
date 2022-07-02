<?php namespace App\Haramain\Kasir\Services;

class PenerimaanPenjualanService
{
    public function __construct()
    {
    }

    public function store($data)
    {
        // set data to object
        $data = (is_array($data)) ? (object) $data : $data;
        // store to data penerimaan penjualan
        // return object data penjualan
        // store to kas
        // return object kas
        // store to jurnal transaksi
        // update piutang penjualan
        // return json status and penerimaan_penjualan_id
    }

    public function update($data)
    {
        // set data to object
        $data = (is_array($data)) ? (object) $data : $data;
        // update data penerimaan penjualan
        // update kas
        // update jurnal transaksi
        // update piutang penjualan
        // return json status and penerimaan_penjualan_id
    }

    public function destroy($penerimaan_penjualan_id)
    {
        //
    }
}
