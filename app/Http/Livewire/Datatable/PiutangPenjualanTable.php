<?php

namespace App\Http\Livewire\Datatable;

use App\Haramain\Helper\DatatablesTrait;
use App\Models\Kasir\SaldoPiutangPenjualan;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PiutangPenjualanTable extends DataTableComponent
{
    use DatatablesTrait;

    public function columns(): array
    {
        return [
            Column::make('Customer ID')
                ->addClass('text-center fw-bolder border'),
            Column::make('Customer')
                ->addClass('text-center fw-bolder border'),
            Column::make('Saldo')
                ->addClass('text-center fw-bolder border'),
            Column::make('')
                ->addClass('text-center fw-bolder border'),
        ];
    }

    public function query(): Builder
    {
        return SaldoPiutangPenjualan::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.piutang_penjualan_table';
    }
}
