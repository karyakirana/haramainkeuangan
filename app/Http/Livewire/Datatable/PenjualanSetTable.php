<?php

namespace App\Http\Livewire\Datatable;

use App\Models\Bisnis\Penjualan;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PenjualanSetTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Column Name'),
        ];
    }

    public function query(): Builder
    {
        return Penjualan::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.penjualan_set_table';
    }
}
