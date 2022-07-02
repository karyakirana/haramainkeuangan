<?php namespace App\Haramain\Master\Models;

use App\Models\Master\Supplier;

trait SupplierTrait
{
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
