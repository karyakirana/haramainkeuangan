<?php

namespace App\Http\Livewire\Datatable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Kasir\PenerimaanPenjualan;

class PenerimaanPenjualanTable extends DataTableComponent
{
    protected $model = PenerimaanPenjualan::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setTableAttributes([
            'class'=> 'gx-7'
        ]);
        $this->setTheadAttributes([
            'class'=>'border border-gray-300'
        ]);
        $this->setTbodyAttributes([
            'class'=>'border border-gray-300'
        ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("", "")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
