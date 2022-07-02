<?php namespace App\Haramain\Master\Models;

use App\Models\User;

trait UserTrait
{
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
