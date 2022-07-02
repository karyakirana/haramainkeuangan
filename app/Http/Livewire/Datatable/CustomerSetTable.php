<?php

namespace App\Http\Livewire\Datatable;

use App\Models\Master\Customer;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CustomerSetTable extends DataTableComponent
{
    public function setTableClass()
    {
        return 'table table-striped gx-5 border';
    }

    public function setTableRowAttributes($row): ?array
    {
        return [
            'class'=>'border'
        ];
    }

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
