<?php namespace App\Haramain\Helper;

trait DatatablesTrait
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
}
