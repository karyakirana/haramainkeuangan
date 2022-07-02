<?php namespace App\Haramain\Bisnis\Models;

trait KodeTraits
{
    public function getLastNumMasterAttribute()
    {
        return substr($this->kode, 1, 5);
    }

    public function getLastNumTransAttribute()
    {
        return substr($this->kode, 0, 4);
    }

    public function getLastNumCharAttribute()
    {
        return substr($this->kode, 0, strpos($this->kode, '/'));
    }
}
