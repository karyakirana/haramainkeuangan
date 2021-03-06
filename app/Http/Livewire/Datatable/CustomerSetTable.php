<?php

namespace App\Http\Livewire\Datatable;

use App\Haramain\Helper\DatatablesTrait;
use App\Models\Master\Customer;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CustomerSetTable extends DataTableComponent
{
    use DatatablesTrait;

    public function columns(): array
    {
        return [
            Column::make('ID', 'kode')
                ->addClass('text-center fw-bolder border'),
            Column::make('Nama')
                ->addClass('text-center fw-bolder border'),
            Column::make('Diskon')
                ->addClass('text-center fw-bolder border'),
            Column::make('Alamat')
                ->addClass('text-center fw-bolder border'),
            Column::make('')
        ];
    }

    public function query(): Builder
    {
        return Customer::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.customer_set_table';
    }
}
