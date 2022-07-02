<?php

namespace App\Http\Livewire\Datatable;

use App\Models\Kasir\PenerimaanPenjualan;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PenerimaanPenjualanTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID'),
            Column::make('Customer'),
            Column::make('Pembayaran'),
            Column::make('Jumlah Bayar'),
            Column::make('Sisa Bayar'),
        ];
    }

    public function query(): Builder
    {
        return PenerimaanPenjualan::query()->where('active_cash', session('ClosedCash'));
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.penerimaan_penjualan_table';
    }
}
