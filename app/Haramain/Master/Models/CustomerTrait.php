<?php namespace App\Haramain\Master\Models;

use App\Models\Master\Customer;

trait CustomerTrait
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
